<?php
    include 'includes/header.php';
    $cards = [
        [
            "img" => "https://cdn.prod.website-files.com/6058a411307dccf59c654f37/6527ff05e44f9cb0778ad076_HOMEPAGE-ILLU-MARKETING.webp",
            "infos" => [
                "svg" => "./images/svgexport-3.svg",
                "title" => "marketing",
                "subtitle" => "Generate leads and engage your customers",
                "description" => "Create superb email and SMS campaigns, automate your marketing actions, measure and optimize your performance.",
                "list" => [
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Targeted email & SMS campaigns",
                    ],
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Forms, surveys & landing pages",
                    ],
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Marketing automation",
                    ],
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "A/B testing",
                    ],
                ],
                "buttonText" => "discover sellsy marketing",
            ],
        ],
        [
            "img" => "https://cdn.prod.website-files.com/6058a411307dccf59c654f37/6527ff1663e50a7e0a9ae07d_HOMEPAGE-ILLU-VENTE.webp",
            "infos" => [
                "svg" => "./images/svgexport-5.svg",
                "title" => "sales",
                "subtitle" => "Increase your sales by selling more and better",
                "description" => "Strengthen your customer relationships, help your sales force to be more efficient and close more sales.",
                "list" => [
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Contacts management",
                    ],
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Quote editing",
                    ],
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Electronic signature",
                    ],
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Performance analysis",
                    ],
                ],
                "buttonText" => "discover sellsy sales",
            ],
        ],
        [
            "img" => "https://cdn.prod.website-files.com/6058a411307dccf59c654f37/6527ffd1f9a68c74bd41912a_HOMEPAGE-ILLU-FACTURATION.webp",
            "infos" => [
                "svg" => "./images/invoicing.svg",
                "title" => "invoicing",
                "subtitle" => "Save time on invoices and payments",
                "description" => "Turn your quotes into invoices with a single click, speed up and secure your payments, and simplify your accounting.",
                "list" => [
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Online payment",
                    ],
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Email automation",
                    ],
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Purchasing and margins",
                    ],
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Pre-accounting",
                    ],
                ],
                "buttonText" => "discover sellsy invoicing",
            ],
        ],
        [
            "img" => "https://cdn.prod.website-files.com/6058a411307dccf59c654f37/6527ff169e75672b515026c6_HOMEPAGE-ILLU-TRESORERIE.webp",
            "infos" => [
                "svg" => "./images/cash-flow.svg",
                "title" => "cash flow",
                "subtitle" => "Simply manage your cash flow",
                "description" => "Monitor your cash flow in real time, make reliable forecasts and take the right business decisions.",
                "list" => [
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Budget forecast",
                    ],
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Budget vs. Actual",
                    ],
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Multi-scenario",
                    ],
                    [
                        "icon" => "./images/svgexport-4.svg",
                        "text" => "Analytical expenditure tracking",
                    ],
                ],
                "buttonText" => "discover sellsy cash flow",
            ],
        ],
    ];
?>

<main>
    <div class="container">
        <div class="section section-homepage">
            <div class="container">
                <div class="centered-content narrow">
                    <div class="">
                        <h2>The CRM suite you'll love to use.</h2>
                    </div>
                </div>
            </div>
        <div class="container layout">
            <?php
                foreach ($cards as $index => $card) {
                    $isEvenRow = $index % 2 === 0;

                    if($isEvenRow) {
                        // image first
                        echo '
                            <div class="layout-grid">
                                <img src="'. $card["img"] . '" alt="Interface de Sellsy Marketing" class="illustration" id="illustration">
                                <div class="text-wrapper">
                                    <div class="homepage-product-name">
                                        <div class="lottie-picto-produit">
                                            <img src="'. $card["infos"]["svg"] .'">' .
                                        '</div>
                                        <div class="suite-home-card-product">
                                            '. $card["infos"]["title"] .'
                                        </div>
                                    </div>
                                    <h2>'. $card["infos"]["subtitle"] .'</h2>
                                    <p class="text-medium mb-3">'. $card["infos"]["description"] .'</p>
                                    <div class="check-list-wrapper">
                                        <ul role="list" class="ckeck-list pl-0">'; 
                                        
                                            foreach ($card["infos"]["list"] as $listItem) {
                                                echo '
                                                    <li class="check-list-item d-flex gap-2 my-2">
                                                        <img src="'. $listItem["icon"] .'">
                                                        <div class="check-list-text">'. $listItem["text"] .'</div>
                                                    </li>
                                                ';
                                            };
                                        echo '
                                        </ul>
                                    </div>
                                    <a id="w-node-fca9af45-2664-e690-88f6-336e9c357585-4b021557" href="/en/products/marketing" class="button w-button text-capitalize">
                                        '.$card["infos"]["buttonText"].'
                                    </a>
                                </div>
                            </div>
                            ';
                    } else {
                        // infos first
                        echo '
                            <div class="layout-grid">
                                <div class="text-wrapper">
                                    <div class="homepage-product-name">
                                        <div class="lottie-picto-produit">
                                            <img src="'. $card["infos"]["svg"] .'">' .
                                        '</div>
                                        <div class="suite-home-card-product">
                                            '. $card["infos"]["title"] .'
                                        </div>
                                    </div>
                                    <h2>'. $card["infos"]["subtitle"] .'</h2>
                                    <p class="text-medium mb-3">'. $card["infos"]["description"] .'</p>
                                    <div class="check-list-wrapper">
                                        <ul role="list" class="ckeck-list pl-0">'; 
                                        
                                            foreach ($card["infos"]["list"] as $listItem) {
                                                echo '
                                                    <li class="check-list-item d-flex gap-2 my-2">
                                                        <img src="'. $listItem["icon"] .'">
                                                        <div class="check-list-text">'. $listItem["text"] .'</div>
                                                    </li>
                                                ';
                                            };
                                        echo '
                                        </ul>
                                    </div>
                                    <a id="w-node-fca9af45-2664-e690-88f6-336e9c357585-4b021557" href="/en/products/marketing" class="button w-button text-capitalize">
                                        '.$card["infos"]["buttonText"].'
                                    </a>
                                </div>
                                <div class="reverse">
                                    <img src="'. $card["img"] . '" alt="Interface de Sellsy Marketing" class="illustration reverse" id="illustration">
                                </div>
                            </div>
                            ';
                    }
                }
            ?>
        </div>
    </div>
    </div>
    <div class="section white bg-white w-100">
        <div class="container bg-transparent">
            
        </div>
    </div>
    <div class="section white">
    </div>
</main>
<?php include "includes/footer.php" ?>