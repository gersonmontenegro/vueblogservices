# vueblogservices
Back end for vueblog app made in PHP/Laravel

This repository is the backend for the [vueblog](https://github.com/gersonmontenegro/vueblog) application, and I'm going to try to explain as much I can because there are only a few hours left to complete this challenge.

An idea about what I'm going to do, is listed below:

 1. Install Laravel 5.7
 2. Create the repository
 3. Install passport package
 4. Create database
 5. Install MongoDB, and set it on Laravel.
 6. Make some services
 7. Create Unit tests
 8. Integrate with Frontend

The is a lot of work to do, and my MondoDB "Kung Fú" is oxidized :)

At this point, the first 2 steps are done. Now is the turn to make the authorization system, and here I'm not going to describe something that could be easily found on Internet. For example, [this article](https://medium.com/modulr/create-api-authentication-with-passport-of-laravel-5-6-1dc2d400a7f) is one of my favorites, because explain with a lot of detail how to create what we need. It was made for Laravel 5.6, but works perfectly on 5.7.

After create the authorization system, I decided to jump for a little while to the 7th step, because I wanted to ensure that everything was ok by making some simple [unit testing](https://github.com/gersonmontenegro/vueblogservices/blob/master/tests/Unit/AuthTest.php), and yes, all is in order until now:

![](https://lh3.googleusercontent.com/ZvYnWqKUIdbWnnwmqlP-Nvg-ZQgvIoSAq2x7wXYOrhtpLxTFET2eiUy9lvkxYHFmRl1geeHu30es=s900)

Now, is the time for MongoDB, so, again, I need to study a little more before to continue with this part of the project.

*By the way, when I wrote the 4th step, Create database, I mean the users authentication database, because the data about post will be in MongoDB, not in MySQL.*

I just realized that I didn't have mongo yet, so, I have to install it, and setting this database. I think this is gonna take a little while, so, I'm going to buy some food for tonight :).

After the shopping time, I started to install the driver for PHP, and things went wrong, and for some reason I can't install the driver on Mac OS Sierra. Actually, after struggling for about 2 hours, I decided to stop, because this error looks like a pain for many persons, and I don't have more time.

I decided to use a server in AWS where I got some projects, and ir works like a charm, but now, I need to download the backend repository, and start to work only in the server, but I have no options at this time.

Ok, one hour later I got Ubuntu 16.04 Server with the backend working, and the MongoDB driver for PHP working. Next step: Set MongoDB into the Laravel installation.

A few minutes later I got the package to use MongoDB from Laravel. I had to struggling for a little while with some configuration inside php.ini, because for some reason, the php config file called was different to the default file. Anyway, I have to continue after at least see this happiness message:

![](https://lh3.googleusercontent.com/tFLXAbxYEZh26-mBbvWXNn9-94W9hTNI-fhSMlYRQ1Zdusc0TXZdLT2mh0EGBUQVHWE60H_RA88p=s800)

