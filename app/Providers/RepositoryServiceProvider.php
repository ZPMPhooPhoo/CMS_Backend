<?php

namespace App\Providers;

use App\Repository\Category\CategoryRepoInterface;
use App\Repository\Category\CategoryRepository;
use App\Repository\Contract\ContractRepoInterface;
use App\Repository\Contract\ContractRepository;
use App\Repository\Invoice\InvoiceRepoInterface;
use App\Repository\Invoice\InvoiceRepository;
use App\Repository\Project\PrjRepoInterface;
use App\Repository\Project\PrjRepository;
use App\Repository\Quotation\QuotationRepoInterface;
use App\Repository\Quotation\QuotationRepository;
use App\Repository\Receipt\ReceiptRepoInterface;
use App\Repository\Receipt\ReceiptRepository;
use App\Services\Category\CategoryServiceInterface;
use App\Services\Category\CategoryService;
use App\Services\Contract\ContractServiceInterface;
use App\Services\Contract\ContractService;
use App\Services\Invoice\InvoiceServiceInterface;
use App\Services\Invoice\InvoiceService;
use App\Services\Project\PrjServiceInterface;
use App\Services\Project\PrjService;
use App\Services\Quotation\QuotationServiceInterface;
use App\Services\Quotation\QuotationService;
use App\Services\Receipt\ReceiptServiceInterface;
use App\Services\Receipt\ReceiptService;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CategoryRepoInterface::class,CategoryRepository::class);
        $this->app->bind(CategoryServiceInterface::class,CategoryService::class);
        $this->app->bind(PrjRepoInterface::class, PrjRepository::class);
        $this->app->bind(PrjServiceInterface::class, PrjService::class);
        $this->app->bind(QuotationRepoInterface::class, QuotationRepository::class);
        $this->app->bind(QuotationServiceInterface::class,QuotationService::class);
        $this->app->bind(ContractRepoInterface::class,ContractRepository::class);
        $this->app->bind(ContractServiceInterface::class,ContractService::class);
        $this->app->bind(InvoiceRepoInterface::class,InvoiceRepository::class);
        $this->app->bind(InvoiceServiceInterface::class,InvoiceService::class);
        $this->app->bind(ReceiptRepoInterface::class,ReceiptRepository::class);
        $this->app->bind(ReceiptServiceInterface::class,ReceiptService::class);
    }
}
