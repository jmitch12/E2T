Eat to Travel is a website that allows users to travel the world through food from the comfort of their own kitchen. 

##Installation
###Setup

1. Save uncompressed folder to Sites forlder
2. Login to MySql as root user
3. Provide MySQL the contents of *setup.sql*.
	> mysql> `source setup.sql`
	
###Populate Recipe Table

1. First Use E2T database in MySQL

2. Then run the following command in MySQL:

INSERT INTO recipe (title,subtitle,ingredients,preparation,servings,time,story,city,song_link,video_link,article_link,image_link,insta_link)VALUES("avocado toast" , "With Goat Cheese and Tomato" , "1 avocado<br>1 tsp lemon juice<br>1 tsp chopped mint<br>small pinch of chilli flakes<br>1 tomato<br>goat cheese<br>salt and pepper" , "In a small bowl smash avocado, add lemon juice, chopped mint, chill flakes and mix it. Toast a slice of bread and spread avocado mix on it. Add slices of tomato, sprinkle with goat cheese. Season with salt and pepper. You can add fried egg if you like, it goes pretty well with avocado." , "One" , "15min" , "Bacon ipsum dolor amet andouille strip steak salami frankfurter leberkas t-bone, ball tip tenderloin ham. Spare ribs pig tri-tip, pork jerky ground round andouille venison porchetta chuck. Kevin ham hock pork belly turducken pork chop bresaola. Chuck turkey prosciutto sirloin. Hamburger beef ribs pork belly andouille ground round porchetta. Short ribs porchetta cupim bacon prosciutto, jowl meatball pig leberkas alcatra. Leberkas shank meatloaf, shoulder pork belly boudin picanha cow sirloin ham hock alcatra salami turkey." , "New York, USA" , "https://soundcloud.com/hops-c/frank-sinatra-alicia-keys-feat-jay-z-empire-state-of-mind" , "https://vimeo.com/24492485" , "http://nyti.ms/1Pluibe" , "https://giphy.com/gifs/new-york-city-Z416D7PjPndLi/fullscreen" , "https://www.instagram.com/nycfoodandtravel/");
######NOTE: The ingredients should be entered into MySQL with break tags instead of spaces. I couldnt keep them in when writing markdown.
2. Finally run the command below:

INSERT INTO recipe (title,subtitle,ingredients,preparation,servings,time,story,city,song_link,video_link,article_link,image_link,insta_link)VALUES("chicken tikka masala" , "The Flavorful Tastes of India" , "For the marinade: <br>1 lb Chicken, cut into cubes<br>1 cup Yogurt<br>1 tbsp Cumin powder<br>1/2 tbsp Coriander powder<br>1/4 tsp Turmeric powder<br>3 cloves Garlic<br>1/2 inch Ginger<br>made into a paste or grated<br>1 tsp Salt<br>1/2 tsp Chilli powder<br>For the sauce:<br>1 medium sized Onion, cubed<br>1/2 roasted Red Bell Pepper<br>6 Cashews<br>1 tsp Cumin powder<br>1/2 tsp Coriander powder<br>3 Cloves, 1/2 inch Cinnamon<br>2 Cardamom pods<br>1 tbsp Kasoori Methi<br>1/4 cup Cream<br>2 tbsp Tomato ketchup<br>1 tbsp Butter<br>1 tbsp Oil<br>1/4 tsp of Chilli powder<br>Salt to taste<br>Cilantro for garnish" , "Marinade the chicken with all the ingredients for marinade for about 20-30 minutes. Grill or pan roast the marinated chicken and set aside. In the mean time, roast the onions in the pan with a few drops of oil until lightly browned. Add the red bell peppers and cashew and toss them around for a couple of minutes. Take if off the stove and cool until ready to handle. Blend the mixture into a fine puree. Add a few tablespoons of water if necessary. Heat a pan (you can use the same pan used for roasting) with a tablespoon of oil and a tablespoon of butter. When the butter just melts, add all the powders (clove, cinnamon, cardamom powder, cumin and coriander) and saute until their aroma wafts around. Add the red bell pepper, onion and cashew puree and gently saute for 3-4 minutes. Add the chilli powder and salt and the tomato ketchup. Mix well and add the cream. Crush Kasoori Methi in your hands before adding to the mix and cook for 2 minutes. Now add the grilled chicken pieces and toss to coat well in the sauce. Check taste and adjust salt or chilli powder as desired. If you want a thinner consistency add a few more tablespoons of water and a sparing splash of cream. Gently simmer for 5 minutes. Garnish with cilantro and serve with Naan (Indian bread) or Basmati rice." , "Four" , "45min" , "I do not have any noteworthy memories of Valentines day other than watching and enjoying some girls giggling silly at the boys they secretly hoped would give them a card and get instant heroine status. My special day is around the Valentines day when I knew who my husband was going to be. It would suffice to say that it had been an eventful adventure for both of us to achieve the status of a married couple. And to mark our special day, I made this Chicken Tikka Masala that we both love. By, Radhika" , "Mumbai,<br>India" , "https://soundcloud.com/dj-adee/tooh-gtpm-dj-adee-remix" , "https://vimeo.com/58313264" , "http://www.buzzfeed.com/regajha/saare-jahan-se-achha#.djNrxlm49" , "https://karijulia.exposure.co/india/photos/2137704" , "https://www.instagram.com/explore/tags/india/");
######NOTE: The ingredients should be entered into MySQL with break tags instead of spaces. I couldnt keep them in when writing markdown.
###Register New User
1. Register new user and login
2. Explore the site!
##FUNCTIONALITY

The user is able to explore the Recipes page as well as two recipes (Avocado Toast and Chicken Tikka).

##NEXT STEPS

I would like to further develop this website and finish coding a few more recipes and other pages. The places page is working but does not link anywhere just yet. My original idea changed over the course of this assignment. Now, I would like to expand my site to include places that the user can go to eat in their city in order to earn points for future travel plans. I would also like to learn how to use Sass better and to try making the site resposive. 
