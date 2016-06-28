
			var temp = "<div class='brick' style='width:{width}px;'><img src='./images/pic{index}.jpg' width='100%'></div>";
			var w = 1, h = 1, html = '', limitItem = 12;
			for (var i = 0; i < limitItem; ++i) {
				w = 1 + 3 * Math.random() << 0;
				html += temp.replace(/\{width\}/g, w*150).replace("{index}", i + 1);
			}
			$("#freewall").html(html);
			var wall = new Freewall("#freewall");
			wall.reset({
				selector: '.brick',
				animate: true,
				cellW: 150,
				cellH: 'auto',
				onResize: function() {
					wall.fitWidth();
				}
			});
			var images = wall.container.find('.brick');
			images.find('img').load(function() {
				wall.fitWidth();
			});

		