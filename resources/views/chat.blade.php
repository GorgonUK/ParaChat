<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap">
        <link rel="stylesheet" href="../resources/css/chat.compiled.css">
        <link rel="stylesheet" href="../resources/css/Footer-Basic.css">
        <link rel="stylesheet" href="../resources/css/styles.css">
        
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body style="height: 100%;width: 100%;overflow-x: hidden;/*overflow-y: hidden;*/">
    <div style="position: absolute;top: 6%;left: 0%;width: 373%;background: rgba(250,72,31,0.02);height: 247%;transform: rotate(43deg) scale(0.77);transform-style: preserve-3d;z-index: -1;right: 0%;margin-left: auto;margin-right: auto;box-shadow: 0px 0px 20px 0px rgb(27,14,14), 0px 0px 0px rgb(251,253,255);filter: blur(0px) hue-rotate(179deg);text-shadow: 0px 0px 0px;overflow-x: hidden;overflow-y: hidden;display: none;">
        <p>Paragraph</p>
    </div>
    <div class="justify-content-lg-start justify-content-xxl-start" style="width: 100%;height: 32px;background: #220922;padding-left: 11px;padding-top: 3px;display: block;position: fixed;top: 0%;">
        <p style="color: #cbbdcb;/*font-size: 14px;*/font-family: Montserrat, sans-serif;">News update!</p>
    </div>
    <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex flex-column justify-content-center flex-sm-column justify-content-sm-center flex-md-column justify-content-md-center flex-lg-column justify-content-lg-center flex-xl-column flex-xxl-column" style="height: 100%;width: 100%;">
        <div class="row text-center d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="/*margin-top: 149px;*/">
            <div class="col">
                <div></div><img style="text-align: center;width:100px;" src="/assets/img/google-stadia-logo-hd4.png">
                <h1 style="color: rgb(255,255,255);text-align: center;margin-top: 0px;">Welcome to LaraChat</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-start justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-center justify-content-xxl-center" style="padding: 7px;padding-right: 0px;padding-top: 52px;"><div class="scroller"></div>
<main>
	<section class="chat">
		<div class="dialog you">
			<figure>
				<img src="https://picsum.photos/id/38/256/256" />
				<p>Scroll to see the chat.</p>
			</figure>
		</div>
		<div class="dialog me">
			<figure>
				<img src="https://picsum.photos/id/39/256/256" />
				<p>Lorem ipsum dolor sit.</p>
			</figure>
		</div>
		<div class="dialog you">
			<figure>
				<img src="https://picsum.photos/id/38/256/256" />
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat rerum non quod nulla excepturi, quam doloremque itaque quo porro in neque sit nam. Et voluptatem, cumque vel voluptatibus pariatur reprehenderit.</p>
			</figure>
		</div>
		<div class="dialog me">
			<figure>
				<img src="https://picsum.photos/id/39/256/256" />
				<p>Lorem, ipsum.</p>
			</figure>
		</div>
		<div class="dialog you">
			<figure>
				<img src="https://picsum.photos/id/38/256/256" />
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, ex rem? Sint ratione reprehenderit ut, asperiores incidunt recusandae illo soluta molestiae culpa eius amet distinctio, suscipit nemo. Id, nam cupiditate.</p>
			</figure>
		</div>
		<div class="dialog me">
			<figure>
				<img src="https://picsum.photos/id/39/256/256" />
				<p>Lorem ipsum dolor sit amet!</p>
			</figure>
		</div>
		<div class="dialog you">
			<figure>
				<img src="https://picsum.photos/id/38/256/256" />
				<p>Lorem ipsum dolor sit amet.</p>
			</figure>
		</div>
		<div class="dialog me">
			<figure>
				<img src="https://picsum.photos/id/39/256/256" />
				<p>Lorem ipsum dolor sit.</p>
			</figure>
		</div>
		<div class="dialog you">
			<figure>
				<img src="https://picsum.photos/id/38/256/256" />
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat rerum non quod nulla excepturi, quam doloremque itaque quo porro in neque sit nam. Et voluptatem, cumque vel voluptatibus pariatur reprehenderit.</p>
			</figure>
		</div>
		<div class="dialog me">
			<figure>
				<img src="https://picsum.photos/id/39/256/256" />
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, harum?</p>
			</figure>
		</div>
		<div class="dialog you">
			<figure>
				<img src="https://picsum.photos/id/38/256/256" />
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</figure>
		</div>
		<div class="dialog me">
			<figure>
				<img src="https://picsum.photos/id/39/256/256" />
				<p>Leave a like if you like this pen! xD</p>
			</figure>
		</div>
	</section>
</main><input type="text" id="username" style="background: #380036;border-color: #ff4b1e;box-shadow: 0px 0px 0px 1px #ff4b1e, 0px 0px 0px 5px rgb(154,0,100);border-radius: 32px;text-align: left;color: #fff;font-size: 21px;position: fixed;/*bottom: 25%;*//*margin-left: auto;*//*margin-right: auto;*/height: 47px;left: 50%;bottom: 20%;transform: translateY(50%) translateX(-50%);width: 51vh;padding-left: 18px;" placeholder="Write message" onclick="showinput()"></div>
        </div>
        <footer class="d-flex justify-content-around footer-basic" style="height: 87.667px;position: fixed;bottom: 0%;left: 0%;">
            <ul class="list-inline text-center d-flex justify-content-md-center">
                <li class="list-inline-item text-center d-flex justify-content-lg-center"><a href="#">Privacy</a></li>
                <li class="list-inline-item text-center d-flex justify-content-lg-center"><a href="#">TOS</a></li>
                <li class="list-inline-item text-center d-flex justify-content-lg-center"><a href="#">&nbsp;About</a></li>
            </ul>
        </footer>
    </div>
    <script src="../resources/js/jquery.min.js"></script>
    <script src="../resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="../resources/js/chat-options.js"></script>
    <script src="../resources/js/chat-toggler.js"></script>
    <script src="../resources/js/smoothScroll.js"></script>
</body>
</html>
