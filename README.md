## Toastmasters Meeting Invitation

Toastmasters Meeting Invitation is simple automated tool written in php intended to be used by Toastmasters club. This app can help you to present invitation to your next meeting without EasySpeak. You only need to edit one file to get it running.

### What does it do?

It generates one-page website with simple responsive design (real-world example can be seen on my [club's website](http://setkani.projevse.cz). This page contains:
- TM logo
- next meeting information (when, where, link to EasySpeak and Tostmaster's name)
- personal invitation 
- 3 images of your choice
- links to social networks


It aims to provide simple way for everyone to invite someone to club meeting without sending any e-mails or links to Easyspeak.


### How does it work?
When generate.php file is triggered, JSON datafile containing information about next meeting is downloaded, processed, then combined with some local data about your club. After that, everything is put into template and index.html is generated. That's all. Now everything is ready and you just need to bring visitors to your new site.


### Wait, what JSON datafile???
Yep, this can be a little problem. To get this site working, you need a json file (specific format needed) which contains information about meeting. If you have a club website and you release invitations to every meeting, just tell your webmaster to create JSON output with this specific format. If you don't have any website, either create one or try to [contact me](http://www.berkasimon.com/kontaktni-formular), and see if I can help you somehow.


### JSON file format
If your json file contains data about more than one meeting, the actual meeting must be on the top of json file. Please see example.json to see required naming conventions. 


### Installation
1. Clone this repository (branch _master_) and run 'composer install'.
2. Copy src/config.php-example to src/config.php
3. Edit src/config.php file
  * _$feed_url_ - URL to JSON file
  * _$meeting['ga_code']_ - Google Analytics code (like UA-xxxxxxxx-y)
  * Everything under '_Club specific information_' is text to be shown (HTML allowed) on the website. Example text is present for easier understanding.
4. Run generate.php



### Personal note 
_I wanted to test Plates templating system so I wrote a simple site for my club. Then I decided to make the code open, so everyone can use it almost without any knowledge of programming (you only need to edit one file). The base code was written in few minutes, so it is not actually very nice, but it just works :)_


### License
![](http://i.creativecommons.org/l/by/3.0/88x31.png)
Theme based on [html5up.net template](http://html5up.net). If you want to say thanks, leave a link to my club's [website](http://projevse.cz) in footer.