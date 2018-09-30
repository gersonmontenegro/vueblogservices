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

After create the authorization system, I decided to jump for a little while to the 7th step, because I wanted to ensure that everything was ok by making some simple [unit testing](https://github.com/gersonmontenegro/vueblogservices/blob/master/tests/Unit/AuthTest.php), and yes, all in order until now:

![](https://lh3.googleusercontent.com/ZvYnWqKUIdbWnnwmqlP-Nvg-ZQgvIoSAq2x7wXYOrhtpLxTFET2eiUy9lvkxYHFmRl1geeHu30es=s900)
