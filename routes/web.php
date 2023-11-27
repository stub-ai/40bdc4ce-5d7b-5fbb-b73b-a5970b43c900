Route::get('/', function () {
    $plans = [
        [
            'name' => 'Basic',
            'features' => ['1 GB Storage', '10,000 Requests', '24/7 Support'],
            'price' => '$10/mo',
        ],
        [
            'name' => 'Pro',
            'features' => ['10 GB Storage', '100,000 Requests', 'Priority Support'],
            'price' => '$20/mo',
        ],
        [
            'name' => 'Enterprise',
            'features' => ['Unlimited Storage', 'Unlimited Requests', 'Dedicated Support'],
            'price' => 'Contact Us',
        ],
    ];

    return view('welcome', ['plans' => $plans]);
});