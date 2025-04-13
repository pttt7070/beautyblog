<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beauty Blog</title>
</head>
<body>
  <header>
    <!-- Phần tiêu đề của trang web -->
	<video id="banner" style="width: 100%;" autoplay loop>
		<source src="PANMELA Beauty.mp4" type="video/mp4">
	</video>
	<ul id="menu">
		<li><a id="logo" href="Trang chủ.html"><img src="Logo.svg" width="194px" height="50px" alt="Programing" style="padding-top: 5px; "></a></li>
		<li class="dropdown" style="padding-left: 100px;"><a href="Trang chủ.html" style="font-family: NotoSerifDisplay-Condensed; color: #ab5c72;"><strong>Trang chủ</strong></a></li>
		<li class="dropdown">
			<a class="dropbtn" href="Chuyên mục Skincare.html" style="font-family: NotoSerifDisplay-Condensed; color: #ab5c72;"><strong>Chuyên mục Skincare</strong></a>
			<div class="dropdown-content">
				<a href="Bài viết 1 - Nhận biết các loại da.html">Nhận biết các loại da</a>
				<a href="Bài viết 2 - Skincare cho da mụn.html">Skincare cho da mụn</a>
				<a href="Bài viết 3 - Skincare cho da dầu.html">Skincare cho da dầu</a>
				<a href="Bài viết 4 - Skincare cho da khô.html">Skincare cho da khô</a>
				<a href="Bài viết 5 - Skincare cho da thường.html">Skincare cho da thường</a>
			</div>
		</li>
		<li class="dropdown">
			<a class="dropbtn" href="Chuyên mục Makeup.html" style="font-family: NotoSerifDisplay-Condensed; color: #ab5c72;"><strong>Chuyên mục Makeup</strong></a>
			<div class="dropdown-content">
				<a href="Bài viết 6- Các bước trang điểm cơ bản.html">Các bước trang điểm cơ bản</a>
				<a href="Bài viết 7 - Trang điểm mặt.html">Trang điểm mặt</a>
				<a href="Bài viết 8 - Trang điểm mắt.html">Trang điểm mắt</a>
				<a href="Bài viết 9 - Trang điểm môi.html">Trang điểm môi</a>
			</div>
		</li>
		<li class="dropdown">
			<a class="dropbtn" href="Sản phẩm.html" style="font-family: NotoSerifDisplay-Condensed; color: #ab5c72;"><strong>Sản phẩm</strong></a>
			<div class="dropdown-content">
				<div class="dropdown-content11">
					<a href="Bài viết 13 - Beauty Skin.html">Beauty Skin</a>
				</div>
				<div class="dropdown-content22">
					<a href="#">Beauty Face</a>
						<div class="dropdown-content2">
							<a href="Bài viết 10 - Beauty Face - Trang điểm mặt.html">Trang điểm mặt</a>
							<a href="Bài viết 11 - Beauty Face - Trang điểm mắt.html">Trang điểm mắt</a>
							<a href="Bài viết 12 - Beauty Face - Trang điểm môi.html">Trang điểm môi</a>
						</div>
				</div>
			</div>
		</li>
	</ul>
	<style>
		#menu{
			list-style-type: none;
			margin: 0px;
			padding: 0px;	
			overflow: hidden;
			display: flex;
		}
		li a, .dropbtn {
			display: inline-block;
			text-align: center;
			padding: 10px 15px;
			text-decoration: none;
		}
		.dropdown{
			display: inline-block;
			padding: 20px 40px 20px 40px;
		}
		.dropdown-content{
			display: none;
			position: absolute;
			background-color: #fff3f3;
			min-width: 120px;
			z-index: 1;
		}
		.dropdown-content1{
			display: none;
			position: absolute;
			background-color: #fff3f3;
			min-width: 120px;
			z-index: 1;
			left: 120px;
			top: 0px;
		}.dropdown-content2{
			display: none;
			position: absolute;
			background-color: #fff3f3;
			min-width: 120px;
			z-index: 1;
			left: 120px;
			top: 0px;
		}
		.dropdown-content a{
			color: #502d25;
			padding: 10px 12px;
			text-decoration: none;
			display: block;
			text-align: left;
		}
		.dropdown-content1 a{
			color: #502d25;
			padding: 10px 12px;
			text-decoration: none;
			display: block;
			text-align: left;
		}
		.dropdown-content2 a{
			color: #502d25;
			padding: 10px 12px;
			text-decoration: none;
			display: block;
			text-align: left;
		}
		.dropdown-content a:hover{background-color: #f2c4c4;}/*hiệu ứng di chuột vào thì thay đổi nền chữ*/
		.dropdown:hover .dropdown-content {display: block;}
		.dropdown .dropdown-content:hover .dropdown-content11{display: block;}
		.dropdown .dropdown-content:hover .dropdown-content22{display: block;}
		.dropdown .dropdown-content .dropdown-content11:hover .dropdown-content1 {display: block;}
		.dropdown .dropdown-content .dropdown-content22:hover .dropdown-content2 {display: block;}
	</style>
  </header>
  <main>
    <!-- Nội dung chính của trang web -->
	<div class="container">
		<h1>
			<span class="auto-type"></span>
		</h1>
	</div>
	<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
	<script>
		var typed = new Typed(".auto-type",{
			strings : ["ABOUT US", "ABOUT US"],
			typeSpeed : 150,
			backSpeed : 150,
			loop : true
		})
	</script>
	<style>
		.container{
			width: 100%;
			font-family: NotoSerifDisplay-Condensed; 
			font-size: 25px; 
			color: #502d25;
			display: flex;
			align-items: center;
			justify-content: center;
		}
	</style>
	<div id="giới thiệu" style="display: flex;">
		<div style="font-family:NotoSerifDisplay-Condensed; font-size:20px; color:#502d25;" align="justify"  id="text" >
			<p><br>
				Chào mừng bạn đến với <mark style="background-color:#edb1b3">Panmela Beauty</mark>, không gian trực tuyến dành cho những ai đam mê làm đẹp. Đây là nơi bạn có thể khám phá các bí quyết chăm sóc da, trang điểm tự nhiên, và cập nhật xu hướng mỹ phẩm mới nhất. Chúng tôi tin rằng làm đẹp không chỉ là ngoại hình, mà còn là cách nuôi dưỡng sự tự tin và niềm vui trong cuộc sống.
				<!---Chào mừng bạn đến với <mark style="background-color:#edb1b3">Panmela Beauty</mark>, không gian trực tuyến dành riêng cho những ai đam mê và yêu thích việc chăm sóc sắc đẹp. Nơi đây không chỉ đơn thuần là một trang web chia sẻ kiến thức, mà còn là người bạn đồng hành, giúp bạn khám phá và tận hưởng những bí quyết làm đẹp tinh tế. Từ những mẹo nhỏ về chăm sóc làn da căng mịn, cho đến các bước trang điểm hoàn hảo để tôn lên vẻ đẹp tự nhiên, tất cả đều được đúc kết từ kinh nghiệm thực tế và sự cập nhật liên tục của các xu hướng thời trang, mỹ phẩm mới nhất.-->
				Chúng tôi tin rằng làm đẹp không chỉ là bề ngoài, mà còn là cách để mỗi người phụ nữ cảm nhận giá trị của bản thân, nuôi dưỡng sự tự tin và niềm vui trong cuộc sống. Với các bài viết chi tiết, dễ hiểu, cùng những gợi ý về sản phẩm chất lượng, <mark style="background-color:#edb1b3">Panmela Beauty</mark> sẽ là cẩm nang không thể thiếu cho mọi cô nàng hiện đại. Dù bạn là người mới bắt đầu học cách chăm sóc bản thân hay đã là một chuyên gia làm đẹp, chắc chắn bạn sẽ tìm thấy cho mình những bí quyết phù hợp để tỏa sáng theo cách riêng.
				Hãy để chúng tôi cùng bạn trên hành trình khám phá và yêu thương chính mình qua từng thói quen làm đẹp mỗi ngày!
			</p>
		</div>
		<div style="margin-left:20px" id="ảnh giới thiệu">
			<img src="hình 1.jpg" width="300px" height="300px" alt="Programing">
		</div>
	</div>
	<div class="comment-icon">
		
			<input id="like" type="radio" name="ikon"  >			
			    <label for="like">&#128077;</label>
			
			<input id="heart" type="radio" name="ikon"  >
			    <label for="heart">&#129505;</label>
			
			<input id="haha" type="radio" name="ikon"  >
			    <label for="haha">&#128518;</label>
			
			<input id="angry" type="radio" name="ikon"  >
			    <label for="angry">&#128544;</label>
			
			<input id="sad" type="radio" name="ikon" >
		        <label for="sad">&#128546;</label>
	
    </div>
	<style>
		
		.comment-icon{
			gap: 15px;
			font-size: 30px;
			cursor: pointer;
			justify-content: left;
			display: flex;
		}
		.comment-icon input[type="radio"]{ 
			display: none; 
		}
		.comment-icon label:hover {
		transform: scale(1.3);
		}
		.comment-icon input[type="radio"]:checked + label {
		color: #FFD700; /* Màu vàng */
		transform: scale(1.3);
		}
	</style>
  </main>
  <a href="#banner"><p style="font-size: 25px; background-color: #f8eeec; position: fixed; top: 85%; left: 95%;">&#128285;</p></a>

  <div class="form">
	<div id="idd" style="padding: 30px; margin-left: 30px;">
		<img style="width: 500px; box-shadow: 0 4px 8px 0 #9e8a86, 0 6px 20px 0 #ac8c85;"src="form.svg">
	</div>
	<!--https://formsubmit.co/trasua7070@gmail.com-->
	<div id="dang-ki">
		<h1 style="margin-left: 90px;"><span>Đăng ký nhận thông tin</span></h1>
		<form id="registrationForm" class="form-reg" action="reg.php" method="post">
			<div class="form-group">
				<label for="fullname">Họ và tên</label><br>
				<input type="text" class="form-control" placeholder="Họ và tên" required name="username"><br>
			</div>
			<div class="form-group">
				<label for="numberphone">Số điện thoại</label><br>
				<input type="number" class="form-control" placeholder="Số điện thoại" required name="numberphone"><br>
			</div>
			<div class="form-group">
				<label for="email">Email</label><br>
				<input type="email" class="form-control" placeholder="your-email@gmail.com" required name="email"><br>
			</div>
			<div class="form-group">
				<label>
					<input type="radio" name="gender" value="male"> Nam
				</label>
				<label>
					<input type="radio" name="gender" value="female"> Nữ
				</label>
				<label>
					<input type="radio" name="gender" value="other"> Khác
				</label>
			</div>
			<input id="submit" type="submit" value="Đăng ký" class="form-submit">
		</form>
	</div>
	<!--
	<script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(event.target);
            let textContent = '';
            formData.forEach(function(value, key) {
          
		  switch (key) {
			  case 'username':
				  textContent += 'Họ và tên: ' + value + '\n';
				  break;
			  case 'numberphone':
				  textContent += 'Số điện thoại: ' + value + '\n';
				  break;
			  case 'email':
				  textContent += 'Email: ' + value + '\n';
				  break;
			  case 'gender':
				  let genderText = value === 'male' ? 'Nam' : value === 'female' ? 'Nữ' : 'Khác';
				  textContent += 'Giới tính: ' + genderText + '\n';
				  break;
			  default:
				  textContent += key + ': ' + value + '\n';
		  }
	  });
            const blob = new Blob([textContent], { type: 'text/plain' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'thông tin.txt';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);

            alert('Đăng ký thành công! Thông tin đã được lưu.');
        });
    </script>-->
  </div>
  <hr>
	<div id="chuyen-tab" >
		<a style="background-color: #f2c4c4; padding: 10px;" href="Trang chủ.html">1</a>
		<a style="padding: 10px;" href="Chuyên mục Skincare.html">2</a>
		<a style="padding: 10px;" href="Chuyên mục Makeup.html">3</a>
        <a style="padding: 10px;" href="Sản phẩm.html">4</a>
	</div>
	<br>
  <footer>
    <img class="Banner" src="Footer.svg" alt="Programing">
	<p style="text-align:center;">Bản quyền © 2024 Trang web của tôi. Mọi quyền được bảo lưu.</p>
  </footer>
  <audio src="bibi.mp3" type="audio/mp3" autoplay> </audio>
  	<div class="cursor"></div>
	<div class="cursor2"></div>
	<script>
		var cursor = document.querySelector('.cursor')
		var cursor2 = document.querySelector('.cursor2')

		document.addEventListener('mousemove' , function(e){
			cursor.style.cssText = cursor2.style.cssText = "left: " + e.clientX + "px; top: " + e.clientY  + "px;";
		});
	</script>
  <style>
	.cursor{
		position: fixed;
		width: 30px;
		height: 30px;
		border: 1px solid salmon;
		border-radius: 50%;
		left: 0;
		top: 0;
		transition: 0.1s;
		transform: translate(-50%, -50%); /*trục x, trục y - ra giữa*/
		pointer-events: none;
		z-index: 1000;	/*hiển thị trên các phần tử khác*/
	}
	.cursor2{
		position: fixed;
		width: 8px;
		height: 8px;
		background: #edb1b3;
		border-radius: 50%;
		left: 0;
		top: 0;
		transition: 0.15s;
		transform: translate(-50%, -50%); /*trục x, trục y - ra giữa*/
		pointer-events: none;	
		z-index: 1000;	/*hiển thị trên các phần tử khác*/
	}
	body{
		background-color: #f8eeec;
	}
	.Banner{ 
		width:100%;
	}
	.form{
		display: flex;
	}
	#anh-bieu-mau{
		width: 50%;
	}
	#dang-ki{
		width: 50%;	
		margin-left: 10px;
	}
	.form-group {
		margin-left: 100px;
	}
	input{
		border: none;
		border-radius: 10px;
		margin-bottom: 10px;
		padding: 5px;
	}
	#submit{
		background-color: #ab5c72;
		margin-top: 10px;
		color: #f8eeec;
		padding-left: 15px;
		padding-right: 15px;
		margin-left: 90px;
	}
	#submit:hover{
		background-color: #502d25;
	}
	main{
		max-width: 1080px;
		margin: 0px auto;
	}
	hr{
		color: white; 
		background: white;
		border: 0;
		height: 1px;
	}
	label.ikon:hover { transform: scale(1.3); }

	a{
		color:#ab5c72;
		text-decoration: none;
	}
	#chuyen-tab{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #chuyen-tab a:hover{
        display: inline-block;
        background-color: #f2c4c4;
    }

  </style>
</body>
</html>