<?php 
    session_start();


    if(isset($_SESSION['cart']) == false){
        $_SESSION['cart'] = array();
    }

    $cart = $_SESSION['cart'];

    
    $products = array(

        'simply-keto'=>array(
            'title'=>'Simply keto bread',
            'price'=> 19.00,
            'category'=>'loaves',
            'image' =>'simplyketo2.jpg',
            'details' =>'I wouldn’t want to call this a basic loaf because its not, but if you are just wanting a lighter bread replacement that you can top with your own goodies, sweet or savory, this is the loaf for you! Made with the best of ingredients, free range eggs and butter from grass fed cows, a dash of MCT oil and almond flour.<br><br>
                                                            
            All items are packaged with care using using compostable, bleach free bio degradable packaging.
            <br><br>
            
            Approx 14 slices per loaf <br><br>

            Amounts per serving (2 slices) <br><br>
            Fat 7g | 
            Carbs 2g | 
            Protein 3g | 
            <br><br>
            
            Ingredients: Almond meal, eggs, GF baking powder, ground flax seed, himilayan salt, butter, chia, MCT oil.'

        ), 

        'garlic-parmesan'=>array(
            'title'=>'Garlic Parmesan loaf',
            'price'=> 22.00,
            'category'=>'loaves',
            'image' =>'garlicparmesan2.jpg',
            'details'=>'The aromatic flavors of garlic herbs and cheese. Who needs scones :) A loaf the whole family will enjoy. Crunchy on the top and cheesy in the middle, especially when toasted. Have it with butter! Lots of it!! Made with the very best of Keto ingredients. I generally use thyme, rosemary or oregano but if you have preference you choose!

            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Approx 14 slices per loaf
            
            Amounts per serving (2 slices) 
            Fat 17.3g | Protein 6.8g | Carbs 2.4g | Cal 188.8 | 
            
            Ingredients: Almond meal, eggs, butter, parmesan, garlic (powder), xantham gum, himilayan salt, GF baking powder, sesame seeds (topping).'
        ),

        'super-seed'=>array(
            'title'=>'Super Seed loaf',
            'price'=> 22.00,
            'category'=>'loaves',
            'image' =>'Superseed.jpg',
            'details'=>'Kreative Keto Kitchens version of Seed loaf, packed with yummy Super seeds! 
            A great mixture of delicious seeds including, pumpkin, sunflower, sesame, chia and flax seed. Top this with either a sweet or savory topping. Made with GF ingredients and all the very best of keto packed goodies!
            
            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Approx 14 slices per loaf 
            
            Amounts per serving (2 slices) 
            Fat 37g | Protein 14g | Carbs 4g | 
            
            Ingredients: Almond meal, butter, eggs, MCT oil, chia seeds, sesame seeds, sunflower seeds, pumpkin seeds, flax seeds, Himilayan salt, GF Baking powder, xantham gum.'
        ), 

        'lemon-loaf'=>array(
            'title'=>'Lemon Seed Poppy loaf ',
            'price'=> 22.00,
            'category'=>'loaves',
            'image' =>'LemonPoppyseedloaf.jpg',
            'details'=>'freshest of organic lemon zest, butter and eggs, toasted with lashings of butter !

            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Approx 14 slices per loaf
            
            Amounts per serving 
            Fat 37g | Protein 14g | Carbs 4g | 
            
            Ingredients: Almond meal, GF baking powder, erythritol, poppy seeds, lemon zest, lemon juice, butter, eggs'
        ), 

        'ginger-loaf'=>array(
            'title'=>'Ginger loaf',
            'price'=> 22.00,
            'category'=>'loaves',
            'image' =>'Gingerloaf.jpg',
            'details'=>'enough to consider this as a delicious treat! Warmed with butter .. or make your own cream cheese icing... using double cream, a dash of vanilla, cream cheese and lemon rind! 
            Once again crafted with the very best of Keto ingredients. 
            
            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Approx 14 slices per loaf 
            
            Amounts per serving (1 slice) 
            Fat 17.25g | Protein 5g | Carbs 2g | Cal 180.83 | 
            
            Ingerdients: Almond meal, GF baking powder, ginger powder and fresh, mixed spice, cinnamon, walnuts (topping), butter, eggs, vanilla essence, erythritol.'
        ), 

        'blueberry-loaf'=>array(
            'title'=>'Blueberry loaf',
            'price'=> 24.00,
            'category'=>'loaves',
            'image' =>'Blueberryloaf.jpg',
            'details'=>'Keto Blueberry loaf or Raspberry (you choose - made with organic blueberries & raspberries and the very best of Keto ingredients, including free range eggs, butter from grass fed cows, coconut flour. And it doesn’t taste eggy! 
            Serve with whipped cream or your own icing (use heavy whipped cream, butter, vanilla and a dash of lemon rind). This loaf comes unsliced for freshness. 
            
            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Approx 14 slices per loaf 
            
            Amounts per serving (1 slices) 
            Fat 11.1g | Protein 3g | Carbs 1.7g | Cal 133 | 
            
            Ingredients: Coconut flour, butter, eggs, blueberries (or raspberries), cinnamon, sour cream, heavy whipping cream, erythritol, vanilla essence, GF baking powder'
        ), 

        'raspberry-loaf'=>array(
            'title'=>'Raspberry loaf',
            'price'=> 24.00,
            'category'=>'loaves',
            'image' =>'Optionvariantforblueberryloaf2.jpg',
            'details'=>'Keto Blueberry loaf or Raspberry (you choose - made with organic blueberries & raspberries and the very best of Keto ingredients, including free range eggs, butter from grass fed cows, coconut flour. And it doesn’t taste eggy! 
            Serve with whipped cream or your own icing (use heavy whipped cream, butter, vanilla and a dash of lemon rind). This loaf comes unsliced for freshness. 
            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Approx 14 slices per loaf 
            
            Amounts per serving (1 slices) 
            Fat 11.1g | Protein 3g | Carbs 1.7g | Cal 133 | 
            
            Ingredients: Coconut flour, butter, eggs, blueberries (or raspberries), cinnamon, sour cream, heavy whipping cream, erythritol, vanilla essence, GF baking powder.'
        ), 

        'marble-loaf'=>array(
            'title'=>'Chocolate vanilla marble loaf',
            'price'=> 24.00,
            'category'=>'loaves',
            'image' =>'Chocvanillamarble2.jpg',
            'details'=>'What more could you want? Maybes some thickened cream, a slab of butter? Picture says it all really - a buttery, chocolatey taste sensation! This loaf is extremely moist! 

            Approx 14 slices per loaf 
            
            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Amounts per serving (2 slices) 
            Fat 14.74g | Protein 7.3g | Carbs 3.3g | 
            
            Ingredients: Almond meal, eggs, erythritol, vanilla essence, sour cream, GF baking powder, himilayan salt, 100% cocoa, water.'
        ), 

        'baps-buns'=>array(
            'title'=>'Baps or buns',
            'price'=> 14.00,
            'category'=>'loaves',
            'image' =>'Bapsorbuns.jpg',
            'details'=>'pizzas. Super filling as they contain ground flax seed - and a hint of mozzarella. I have experimented with a few but these are the winners. 

            Mixture makes 4 large or 6 small 
            
            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Amounts per serving (1 large roll) 
            Fat 18g | Protein 10.7g | Carbs 2.3g | 
            
            Ingredients: almond meal, psyllium husk, GF baking powder, nutritional yeast, himilayan salt, AC vinegar, egg whites, water, xantham gum.'
        ), 

        'donuts'=>array(
            'title'=>'Donuts',
            'price'=> 20.00,
            'category'=>'loaves',
            'image' =>'donutstwo2.jpg',
            'details'=>'Who would have thought? Low carb donuts - the softest of vanilla goodness - a keto version of the good old donut, using almond meal! 

            These moist goodies come in a selection pack of 2 chocolate frosted, 2 chocolate chip, 3 cinnamon sugar - or 4 of your choice. Specify in the checkout process what you would like included in your donut order. 
            
            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Amounts per serving (choc frosted) 
            Fat 14.2g | Protein 4.2g | Carbs 1.6g | Cal 157 | Amounts per serving (cinnamon sweetened) 
            Fat 12.4g Protein 4.0g Carbs 1.02g Cal 135 
            
            Ingredients:Almond meal, erythritol, vanilla essence, baking powder, butter, cream, eggs, cinnamon (choc frosting - cocoa 100%, cream, erythritol'
        ), 

        'choc-cin'=>array(
            'title'=>'Chocolate cinnamon buns',
            'price'=> 22.00,
            'category'=>'loaves',
            'image' =>'choccycinammonbuns2.jpg',
            'details'=>'Try these toasted with butter, the fragrant spices of cinnamon, nutmeg and ginger, once warmed the chocolate chips ooze gooey goodness. 
            These arent loaded with fruit or sugar, but they are yum, with the perfect amount of spices, sweetness (erythritol), dense and super moist! and even better freezable! So you can make them last!! Please note: These are flattish type buns - in no way are they supposed to be big and fat like other grain and preservative filled buns! They do however taste amazing! 
            
            Six buns per order 
            
            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Amounts per serving (1 bun) 
            Fat 14g | Protein 9g | Carbs 2g | Cal 285 | 
            
            Ingredients: Almond Meal, Psyllium Husk, GF baking powder, nutritional yeast, cinnamon, ginger, mixed spice (powders), vanilla essence, egg whites, erythritol, water, healtheries milk choc sugar free chips. Please advise if you would prefer Lindt'
        ), 

        'choc-chip'=>array(
            'title'=>'Chocolate chip biscuit',
            'price'=> 18.00,
            'category'=>'cookies + brownie',
            'image' =>'Chocchipbiscuit2.jpg',
            'details'=>'These gems are a fabulous sweet treat, and are oh so worth it! Bite into buttery chocolatey goodness, I have tried a few keto cookie recipe options but this is by far my favourite. Uses Erythritol. 

            12 - 13 Cookies per order 
            
            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Amounts per serving (1 cookie) 
            Fat 14.8g | Protein 3.4g | Carbs 1.7g | Cal 180 | 
            
            Ingredients: Almond meal, butter, erythritol, vanilla essence, egg, GF baking powder, xantham gum, salt, sugar free choc chips.'
        ), 

        'fudge-brown'=>array(
            'title'=>'Super fudgy brownie',
            'price'=> 18.00,
            'category'=>'cookies + brownie',
            'image' =>'Superfudgybrownie2.jpg',
            'details'=>'I would say this would be the best keto version of a chocolatey Fudgy brownie! It almost tops my choc chip cookies and at 1 carb per piece - why not have 2 pieces! Try it warmed with double cream, oh my! Using the very best of Keto ingredients, a great addition to your loaf order. 

            Approx 16 pieces per order 
            
            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Amounts per serving (1 slice) 
            Fat 9.6g | Protein 2.13g | Carbs 1.06g | Cal 108.8 | 
            
            Ingredients: Butter, erythritol, 100% cocoa, himilayan salt, eggs, GF Baking powder, almond meal, vanilla essence, water.'
        ), 

        'dub-choc-chip'=>array(
            'title'=>'Double chocolate chip salted cookie',
            'price'=> 18.00,
            'category'=>'cookies + brownie',
            'image' =>'doublechocchip.jpg',
            'details'=>'For all you chocolate lovers, have no fear you aren’t missing a thing! I have combined the best of Cocoa powders, sugar free choc chips, almond meal with toasted coconut, and a smattering of salt to make a buttery, chocolate mouthful of low carb goodness. 

            Approx 12 - 14 cookies per order 
            
            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Amounts per serving (1 cookie) 
            Fat 10g | Protein 4g | Carbs 1.5g | 
            
            Ingredients: Butter, 100% cocoa, erythritol, coconut, eggs, almond meal, himilayan salt, vanilla essence, GF baking powder, xantham gum, sugar free chocolate chips.'
        ), 
        
        'cheescake-b'=>array(
            'title'=>'Chocolate raspberry cheese cake brownie',
            'price'=> 30.00,
            'category'=>'cookies + brownie',
            'image' =>'cheesecakebrownie.jpg',
            'details'=>'With the flavors of chocolate, raspberries, and cheesecake combined into one low carb grain free slice, this one is a winner! 
            Using a combination of almond and coconut flours, sugar free chocolate and cream cheese and butter, topped with raspberries (or boysenberries). These treats are a taste sensation. 
            
            Approx 15 slices 
            
            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Amounts per serving (1 slice) 
            Fat 9.6g | Protein 3.2g | Carbs 2.13g | Cal 185.6 | 
            
            Ingredients: Butter, eggs, water, erythritol, almond meal, vanilla essence, 100% cocoa, coconut flour, GF baking powder, xantham gum, himilayan salt, raspberries, cream cheese, sugar free choc chips.'
        ), 

        'koko'=>array(
            'title'=>'Kokonut ice',
            'price'=> 22.00,
            'category'=>'sweet treats',
            'image' =>'Kokonutice2.jpg',
            'details'=>'Need I say more, good old traditional Coconut Ice! Double layered sweet coconut goodness, with a hint of raspberry and vanilla. Keep me refigerated! 

            Approx 15 slices 
            
            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Amounts per serving (1 slice) 
            Fat 15.9g | Protein 0.7g | Carbs 0.8g | Cal 154.6 | 
            
            Ingredients: Coconut, erythritol, vanialla essence, raspberry essence, coconut oil.'
        ), 

        'muffin'=>array(
            'title'=>'Spiced coffee muffin',
            'price'=> 22.00,
            'category'=>'sweet treats',
            'image' =>'Spicedcoffeemuffins.jpg',
            'details'=>'The picture says it all... Cinnamon all spiced coffee moist muffins. One bite into this and you hit the crunchy buttery walnut topping, finishing off with spiced coffee muffin goodness... serve warmed with lashings of butter! 

            Approx 10 muffins per order 
            
            All items are packaged with care using using compostable, bleach free bio degradable packaging. 
            
            Amounts per serving (1 slice) 
            Fat 16g | Protein 5g | Carbs 2g | Cal 191 | 
            
            Ingredients: Almond Meal, Coconut flour, erythritol. butter, baking powder, salt, cinnamon, mixed spice, coffee, walnuts, water, eggs.'
        ), 


        
    );


?>