# WPBingo
A companion plugin for powering WPBingo.com

Install and activate this plugin on any web-accessible WordPress site. Create bingo squares to your heart's delight (I recommend creating at least 48 different squares for better variety)! A word of caution: the endpoint for the bingo cards supports the `random` orderby query param and could therefore become a point of weakness during a DDoS attack. In a serious production environment you may wish to disable this filter and instead fetch more squares (e.g. 48 instead of 24) then shuffle and trim them on the front-end via JavaScript. WPBingo.com is currently using this safer method.

You can see and swipe the front-end code that leverages this API data at [WPBingo.com](http://WPBingo.com). The most important thing to change for running your own setup is the API URL.

Slides about this wild contraption are available from my [WordCamp Miami 2018 presentation](https://docs.google.com/presentation/d/1819JV95dz6HIl2fb-AL0gWH98t0gBqTSDmWwELnxR1w/edit?usp=sharing):
[![WordCamp Miami 2018 Slide Deck](https://wpsessions.com/wp-content/uploads/2018/03/wpbingo-slide-min.jpg)](https://docs.google.com/presentation/d/1819JV95dz6HIl2fb-AL0gWH98t0gBqTSDmWwELnxR1w/edit?usp=sharing)
