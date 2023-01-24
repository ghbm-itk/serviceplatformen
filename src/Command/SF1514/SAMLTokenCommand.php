<?php

namespace ItkDev\Serviceplatformen\Command\SF1514;

use ItkDev\Serviceplatformen\Certificate\FilesystemCertificateLocator;
use ItkDev\Serviceplatformen\Service\SF1514\SF1514;
use ItkDev\Serviceplatformen\Service\SoapClient;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SAMLTokenCommand extends Command
{
    protected static $defaultName = 'serviceplatformen:sf1514:saml-token';

    protected function configure()
    {
        $inputOptions = [
            new InputOption('certificate', null, InputOption::VALUE_REQUIRED, 'path to certificate'),
            new InputOption('passphrase', null, InputOption::VALUE_REQUIRED, 'passphrase to certificate'),
            new InputOption('authority-cvr', null, InputOption::VALUE_REQUIRED, 'authority cvr', '55133018'),
            new InputOption('sts-applies-to', null, InputOption::VALUE_REQUIRED, 'service SAML token should apply to'),
        ];
        $this->setDefinition(new InputDefinition($inputOptions));

        $this->setDescription('Helper script for testing “SF1514: Sikkerhed - Hent Token fra Security Token Service”.');

        $help = <<<HELP

certificate:
    should be path from project root to file containing the certificate in p12 format, i.e.
    '/app/src/Command/SF1514/certificate.p12'
 
passphrase:
    the passphrase for p12 certificate, i.e.
    'XYZ'

sts-applies-to:
    the service SAML token should grant access to, i.e. SF1500 Organisation
    'http://stoettesystemerne.dk/service/organisation/3'

authority-cvr:
    the authority cvr number certificate is granted for, i.e. Aarhus Kommune
    '55133018'
HELP;

        $this->setHelp($help);

        $this->inputOptions = array_combine(array_map(fn (InputOption $option) => $option->getName(), $inputOptions), $inputOptions);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);
        $options = $resolver->resolve(
            array_filter(array_filter($input->getOptions()), fn ($name) => isset($this->inputOptions[$name]), ARRAY_FILTER_USE_KEY)
        );

        $certificateLocator = new FilesystemCertificateLocator($options['certificate'], $options['passphrase']);

        $sf1514 = new SF1514([
            'certificate_locator' => $certificateLocator,
            'authority_cvr' => $options['authority-cvr'],
            'sts_applies_to' => $options['sts-applies-to'],
        ]);

        $token = $sf1514->fetchSAMLToken();

        if ($token !== null) {
            $output->writeln('Success getting SAML Token with provided information.');
            return static::SUCCESS;
        } else {
            $output->writeln('Could not fetch SAML Token.');
            return static::FAILURE;
        }
    }

    private function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired([
                'certificate',
                'passphrase',
                'authority-cvr',
                'sts-applies-to',
            ])
        ;
    }
}
