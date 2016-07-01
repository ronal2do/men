var feed = new Instafeed({
    get: 'user',
    userId: '361249173',
	accessToken: '7c5767ec846e4f2fa8fe4f41cd36e4d9',
    clientId: 'f84de67b572b49a0bfbe6016ed1135f6',
  	template: '<a class="instagram-feed" href="{{link}}"><img src="{{image}}" /></a>',
  	limit: 14,
    sortBy: 'most-recent',
});
console.log(feed);
feed.run();


