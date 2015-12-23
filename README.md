# Use-php-and-python-to-post-article-on-Facebook-group:

The resason why I don't use php sdk of facebook is that "I am not good at php when I developed this website at first time and the way to 
use python facebook api is much easier than php in my mind."

Here is the link of python facebook api https://github.com/pythonforfacebook/facebook-sdk

The easy way to insatll python-facebook api is use "pip install facebook-sdk".

#Notice

Here is something I want to tell in advance:

First time I use ubuntu 14.04 and pip insatll facebook-sdk is ok and python 2.7 work smoothy in my system , I think that everything
is going to be well when I develop this website , Unfortunately when I use "import facebook" in my python script , and my system 
said "Can not find module named facebook" . I debug this error for one day and still can not fix it , therefore I chosee ubuntu 
15.04 and my import works very well in 15.04.

#Introduction

The information about how to create a website to auto-post article on facebook group is hard to find a good example , so here is what I
did to develop a website and you can post something you want and the system will auto-post something to somewhere you want.

I am a newbie on github , so If I got something wrong here feel free to leave any comment .

The key point of posting something on facebook is to register a application on Facebook developer and get a token to use facebook api.
https://developers.facebook.com/

You can follow this website http://nodotcom.org/python-facebook-tutorial.html to get propriate facebook developer's token . 

If everything is ready , click the link below and you will get a long-lived token(60 days)

https://graph.facebook.com/oauth/access_token?client_id={APP_ID}&client_secret={APP_SECRET}&grant_type=fb_exchange_token&fb_exchange_token={EXISTING_ACCESS_TOKEN}

If you did not do this , your token will expire for short time !!

#Step 1 instert data in your database :

The main point of develop a website is you need to ask user to insert someyhing on your website.

Here is a quick example of posting some words in php.

<form action="Post.php" method="post">
    Article Url: <input type="text" name="Article_Url" /></br>
    Article Title: <input type="text" name="Article_Title" /></br>
    Article Comment:<input type="text" name="Article_Comment"></br>
<input type = "submit" value = "Send"/>
</form>

#Step 2 select those content from your database and put them in to argument(See Article.php)

#Step 3 use python to post content on facebook group(SeeFB_Post.py)
