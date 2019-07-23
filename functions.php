<?php 
    session_start();


    if(isset($_SESSION['cart']) == false){
        $_SESSION['cart'] = array();
    }

    $cart = $_SESSION['cart'];

    
    $products = array(
        'simply-keto'=>array(
            'title'=>'Simply keto bread ',
            'price'=> 19.00,
            'category'=>'loaves',
            'image' =>'simplyketo2.JPG',
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

        // 'garlic-parmesan'=>array(
        //     'title'=>'Garlic Parmesan loaf ',
        //     'price'=> 22.00,
        //     'category'=>'loaves',
        //     'image' =>'garlicparmesan2.JPG',
        //     'details'=>'bla'
        // ), 

        'garlic-parmesan'=>array(
            'title'=>'Garlic Parmesan loaf ',
            'price'=> 22.00,
            'category'=>'loaves',
            'image' =>'garlicparmesan2.JPG',
            'details'=>'bla'
        )
    );


?>