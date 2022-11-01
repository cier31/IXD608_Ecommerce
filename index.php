<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>Doggie's Storage</title>
    <!-- <link rel="stylesheet" href="lib/css/gridsystem.css">
    <link rel="stylesheet" href="lib/css/styleguide.css">
    <link rel="stylesheet" href="css/storetheme.css">-->
    <? include"parts/meta.php";?>
</head>
<body>
    <?php include "parts/navbar.php";?>
    <!--header>div.container.display-flex>div.flex-none+div.flex-stretch+div.flex-none.nav>ul.container.display-flex>li*4>a[href="#article$"]>{Article $} -->
    <header>
        <div class="container display-flex">
            <div class="flex-none"></div>
            <h1>Doggie's Storage</h1>
            <div class="flex-stretch"></div>
            <div class="flex-none nav">
                <ul class="container display-flex">
                    <li><a href="#article1">Food</a></li>
                    <li><a href="#article2">Treats</a></li>
                    <li><a href="#article3">Supplies</a></li>
                    <li><a href="#article4">Medicine</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="card soft">
            <h2>Grid</h2>
                <div class="grid">
                    <div class="col-xs-6">Column 6</div>
                    <div class="col-xs-6">Column 6</div>
                </div>

                <div class="grid gap xs-small md-medium">
                    <div class="col-xs">Column 4</div>
                    <div class="col-xs">Column 4</div>
                    <div class="col-xs">Column 4</div>
                
                    <div class="col-xs-3">Column 3</div>
                    <div class="col-xs-3">Column 3</div>
                    <div class="col-xs-3">Column 3</div>
                    <div class="col-xs-3">Column 3</div>
                </div>

                <div class="grid ten">
                    <div class="col-xs-2">Column 2</div>
                    <div class="col-xs-2">Column 2</div>
                    <div class="col-xs-2">Column 2</div>
                    <div class="col-xs-2">Column 2</div>
                    <div class="col-xs-2">Column 2</div>
                </div>
        </div>
    </div>

    <div class="container">
        <div class="card soft">
            <h2>Responsive Grid</h2>
            <div class="grid">
                <div class="col-xs-12 col-md-6">Column 6</div>
                <div class="col-xs-12 col-md-6">Column 6</div>
            </div>

            <div class="grid">
                <div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
                <div class="col-xs-12 col-md-4 col-xl-6">Column 6</div>
                <div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>

                <div class="col-xs-12 col-md-3 col-xl-2">Column 2</div>
                <div class="col-xs-12 col-md-3 col-xl-4">Column 4</div>
                <div class="col-xs-12 col-md-3 col-xl-4">Column 4</div>
                <div class="col-xs-12 col-md-3 col-xl-2">Column 2</div>

                <div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
                <div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
                <div class="col-xs-12 col-md-4 col-xl-6">Column 6</div>     
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid gap xs-small md-medium">
            <div class="col-xs-6 col-md-3">
                <div class="card soft"><img src="https://via.placeholder.com/500" alt="" class="media-image"></div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="card soft"><img src="https://via.placeholder.com/500" alt="" class="media-image"></div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="card soft"><img src="https://via.placeholder.com/500" alt="" class="media-image"></div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="card soft"><img src="https://via.placeholder.com/500" alt="" class="media-image"></div>
            </div>
        </div>
    </div>

    <!--div.container>article#article$.article*4>h2{Article $}+div.article-body>p*3>lorem40-->
    <div class="container">
        <article id="article1" class="article">
            <h2>Food</h2>
            <div class="article-body">
                <p>Most commercially produced dog food is made with animal feed grade ingredients and comes dry in bags (also known in the US as kibble) or wet in cans. Dry food contains 6–10% moisture by volume, as compared to 60–90% in canned food. Semi-moist products typically run 25–35%. Isotopic analysis of dog food in the Brazilian market have found that they are basically made of maize and poultry by-products.</p>
                <p>We have dry, wet, freeze-dried food and different types of diets for senior dogs.</p>
                <p>There are a few key components to consider when evaluating dietary needs. These factors include the quality and digestibility of the protein provided in the diet, as well as the composition of the amino acids included, and finally the energy density provided in the diet. Diets containing proteins that are high in quality, composition, and digestibility require less of that protein to be present. The same can be said in regards to the energy density. In contrast, high-protein diets will provide excess protein content after meeting maintenance demands; this can therefore lead to the protein being utilized in fat and energy storage.This ultimately increases the risk for developing obesity and other health related issues. Higher protein in the diet helps reduce lean body mass loss, but will not lead to an increase in size of muscle unless paired with resistance exercises or anabolic steroids under maintenance conditions.</p>
            </div>
        </article>
    

        <article id="article2" class="article">
            <h2>Treats</h2>
            <div class="article-body">
                <p>Dog biscuits and baked goods are easily the most common kind of dog treat out there. Some come in bags, while others are displayed in cases at the front of pet shops (complete with doggo-friendly icing!). In moderation, these treats are usually fine, but double-check the ingredients list! Some come filled with nasty preservatives or other items that are better left outside of your furry friend.</p>
                <p>Bones and rawhide are definitely not the same. The bones and rawhide that you generally find at pet stores have been treated or processed to a point where they don't resemble anything you'd find on an animal. Raw bones, on the other hand, are much safer for your barky buddy. Either way, watch to make sure no large pieces are swallowed!</p>
                <p>Chewy dog treats are fun for pooches because they get to chomp on them lots before swallowing. These treats are generally dehydrated in some way to create the right texture, though the ingredients range greatly from product to product. As with all treats, look at the ingredients and find chews that have a short list of recognizable food items instead of complicated preservatives!</p>
            </div>
        </article>
       
        
        <!--</div>-->
        <div class="view-window" style="background-image: url(img/dog.jpg);"></div>
        <div class="container">

            <article id="article3" class="article">
                <h2>Supplies</h2>
                <div class="article-body">
                    <p>Leash and Collar can be personalized and come in many varieties. There are retractable leashes, leashes with poop bag dispensers, leashes with padded handles, reflective collars, and LED light collars. Find what works with your pet and don’t feel bad about having multiple leashes. Different leashes can serve different purposes and it’s always smart idea to have an extra leash on hand. Slip leashes are excellent for this purpose as you can simply slip it over your pet’s head if there’s not a collar. It’s a great backup to have.</p>
                    <p> Pet identification tag and microchip seem like things you can put off and take care of whenever you get around to it but that is not the case. According to American Humane, almost 10 million pets are lost each year.1 Make sure to update your pet’s ID tag every time your contact information changes. In addition, if the shelter or breeder where you got your pet from does not microchip your dog or cat, you should have it done by your veterinarian. You never know when accidents or emergencies will happen and you’ll want to protect your new pet immediately.</p>
                    <p>Pet’s bed is their safe spot to relax and sleep. It should be comfortable, supportive, and enable them to stretch out. You will likely go through several beds in your pet’s lifetime and once a dog becomes older the bed should provide the necessary cushioning for their joints.</p>
                </div>
            </article>
        </div>

        <article id="article4" class="article">
            <h2>Medicine</h2>
            <div class="article-body">
                <p>If you notice your dog isn't quite themselves lately, it could be because they are in pain. They could have an injury, an infection, or a disease. Or maybe they are starting to feel the aches of aging. When your pet hurts, you want to help them feel better. Pain medications for dogs could be of great help, such as NSAIDs, aspirin, etc.</p>
                <p>Nothing gets a pet owner moving faster than the preemptive sounds of their pet preparing to vomit or have diarrhea.If you have a dog, you will likely have to deal with diarrhea at one time or another. And in some unfortunate cases, it may be a regular situation. Probiotics comes to treat this situation.</p>
                <p>Dogs can suffer from different types of anxiety, some of which can be truly debilitating. As pet parents, we want to help, but we’re faced with many confusing treatment and medication options. Here we give some recommendations. Alprazolam is often prescribed to help dogs who become anxious during thunderstorms, but it may also be used for other types of situational anxiety.</p>
            </div>
        </article>
    </div>
</body>
</html>