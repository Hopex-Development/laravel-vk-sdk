<?php

namespace App\Console\Commands;

use Hopex\VkSdk\Facades\SdkConfig;
use Illuminate\Console\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class MakeEndpoint
 * @package Hopex\VkSdk\Console\Commands
 */
class MakeEndpoint extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'endpoint:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generation endpoint hash for SourceMod plugin';

    /**
     * Configures the current command.
     */
    protected function configure()
    {
        $this->addOption(
            'host',
            null,
            InputOption::VALUE_REQUIRED,
            'Enter URL of your host with protocol and without route'
        );
    }

    /**
     * Execute the console command.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $rows = [];
        $host = trim($input->getOption('host'), '/');

        foreach (SdkConfig::routes() as $name => $route) {
            $withApi = sprintf('%s/%s', $host, sprintf('api/%s', $route));
            $rows[] = [
                $name,
                $withApi,
                base64_encode(base64_encode($withApi))
            ];
        }

        $table = new Table($output);
        $table
            ->setHeaders(['NAME', 'URL', 'ENDPOINT'])
            ->setRows($rows);
        $table->render();

        return self::SUCCESS;
    }
}
