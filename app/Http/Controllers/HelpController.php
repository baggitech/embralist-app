<?php

namespace App\Http\Controllers;

class HelpController extends Controller
{
    public function index()
    {
        return view('help.index');
    }

    public function article(string $slug)
    {
        $articles = [
            'creating-account' => [
                'title' => 'Creating an account',
                'category' => 'Getting started',
                'updated_at' => 'January 2025',
                'content' => '<p>Creating an account lets you save listings, contact professionals, and manage your activity in one place.</p><ol><li>Click Sign Up from the header.</li><li>Fill in your name, email, and password.</li><li>Confirm your account if required.</li></ol>',
            ],
            'join-pro-network' => [
                'title' => 'Joining the Pro Network',
                'category' => 'For professionals',
                'updated_at' => 'January 2025',
                'content' => '<p>Joining the Pro Network gives you visibility across Embralist and helps clients discover your services.</p><p>Complete your profile, add your service areas, and publish your first project to get started.</p>',
            ],
            'billing-payments' => [
                'title' => 'Billing & payments',
                'category' => 'Account & billing',
                'updated_at' => 'January 2025',
                'content' => '<p>Billing information is managed from your account settings. Add a payment method and review invoices from the payments section.</p>',
            ],
            'leaving-review' => [
                'title' => 'Leaving a review',
                'category' => 'Reviews & ratings',
                'updated_at' => 'January 2025',
                'content' => '<p>You can leave a review after a project is completed. Reviews should describe your experience clearly and respectfully.</p>',
            ],
        ];

        $article = $articles[$slug] ?? [
            'title' => ucfirst(str_replace('-', ' ', $slug)),
            'category' => 'Help article',
            'updated_at' => 'January 2025',
            'content' => '<p>This help article is coming soon. Please contact our support team for assistance.</p>',
        ];

        $relatedArticles = array_values(array_filter($articles, fn ($item) => $item['title'] !== $article['title']));

        return view('help.article', compact('article', 'relatedArticles'));
    }
}
