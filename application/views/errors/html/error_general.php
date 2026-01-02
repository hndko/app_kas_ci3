<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Error | E-KAS</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: 'Inter', sans-serif;
			min-height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
			padding: 20px;
		}

		.error-container {
			text-align: center;
			background: rgba(255, 255, 255, 0.95);
			padding: 3rem;
			border-radius: 24px;
			box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
			max-width: 500px;
			width: 100%;
			animation: fadeInUp 0.6s ease-out;
		}

		@keyframes fadeInUp {
			from {
				opacity: 0;
				transform: translateY(30px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.error-icon {
			font-size: 5rem;
			color: #f5576c;
			margin-bottom: 1rem;
			animation: shake 0.5s ease-in-out;
		}

		@keyframes shake {

			0%,
			100% {
				transform: translateX(0);
			}

			25% {
				transform: translateX(-10px);
			}

			75% {
				transform: translateX(10px);
			}
		}

		.error-title {
			font-size: 1.75rem;
			font-weight: 700;
			color: #2d3748;
			margin-bottom: 1rem;
		}

		.error-message {
			color: #718096;
			margin-bottom: 2rem;
			line-height: 1.6;
			background: #fff5f5;
			padding: 1rem;
			border-radius: 12px;
			border-left: 4px solid #f5576c;
			text-align: left;
		}

		.error-actions {
			display: flex;
			gap: 1rem;
			justify-content: center;
			flex-wrap: wrap;
		}

		.btn {
			display: inline-flex;
			align-items: center;
			gap: 0.5rem;
			padding: 0.875rem 1.5rem;
			border-radius: 12px;
			font-weight: 600;
			text-decoration: none;
			transition: all 0.3s ease;
		}

		.btn-primary {
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			color: white;
			box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
		}

		.btn-primary:hover {
			transform: translateY(-2px);
			box-shadow: 0 8px 25px rgba(102, 126, 234, 0.5);
		}

		.btn-secondary {
			background: #f7fafc;
			color: #4a5568;
			border: 2px solid #e2e8f0;
		}

		.btn-secondary:hover {
			background: #edf2f7;
			transform: translateY(-2px);
		}

		.decorations {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			pointer-events: none;
			overflow: hidden;
			z-index: -1;
		}

		.circle {
			position: absolute;
			border-radius: 50%;
			background: rgba(255, 255, 255, 0.1);
			animation: float 6s ease-in-out infinite;
		}

		.circle:nth-child(1) {
			width: 300px;
			height: 300px;
			top: -100px;
			right: -100px;
		}

		.circle:nth-child(2) {
			width: 200px;
			height: 200px;
			bottom: -50px;
			left: -50px;
			animation-delay: -3s;
		}

		@keyframes float {

			0%,
			100% {
				transform: translateY(0) rotate(0deg);
			}

			50% {
				transform: translateY(-20px) rotate(10deg);
			}
		}
	</style>
</head>

<body>
	<div class="decorations">
		<div class="circle"></div>
		<div class="circle"></div>
	</div>

	<div class="error-container">
		<div class="error-icon">
			<i class="bi bi-exclamation-triangle-fill"></i>
		</div>
		<h1 class="error-title"><?php echo $heading; ?></h1>
		<div class="error-message">
			<?php echo $message; ?>
		</div>
		<div class="error-actions">
			<a href="javascript:history.back()" class="btn btn-secondary">
				<i class="bi bi-arrow-left"></i> Kembali
			</a>
			<a href="/" class="btn btn-primary">
				<i class="bi bi-house"></i> Dashboard
			</a>
		</div>
	</div>
</body>

</html>