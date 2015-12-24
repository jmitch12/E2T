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

INSERT INTO recipe (title,subtitle,ingredients,preparation,servings,time,story,city,song_link,video_link,article_link,image_link,insta_link)

2. Finally run the command below:

INSERT INTO recipe (title,subtitle,ingredients,preparation,servings,time,story,city,song_link,video_link,article_link,image_link,insta_link)






The user is able to explore the Recipes page as well as two recipes (Avocado Toast and Chicken Tikka).

##NEXT STEPS

I would like to further develop this website and finish coding a few more recipes and other pages. The places page is working but does not link anywhere just yet. My original idea changed over the course of this assignment. Now, I would like to expand my site to include places that the user can go to eat in their city in order to earn points for future travel plans. I would also like to learn how to use Sass better and to try making the site resposive. 
