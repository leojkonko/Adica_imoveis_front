<?php

namespace App\Http\Controllers;

use App\Services\SiteService;
use Ellite\PageCompany\Services\PageCompanyService;

class CompanyController extends Controller
{
    public function index(SiteService $site, PageCompanyService $page)
    {
        $site->setAlternates('company')
            ->setTitle('Sobre nós')
            ->setBreadTitle('Sobre nós')
            ->pushBreadCrumb('Sobre nós')
            ->setDescriptionIfNotEmpty($page->getPage()->description)
            ->setKeywordsIfNotEmpty($page->getPage()->keywords);

        return view('front.pages.company', [
            'page' => $page->getPage(),
        ]);
    }
}
