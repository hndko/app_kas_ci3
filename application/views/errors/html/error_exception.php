<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exception | E-KAS</title>
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
			background: linear-gradient(135deg, #5f2c82 0%, #49a09d 100%);
			padding: 20px;
		}

		.error-container {
			background: rgba(255, 255, 255, 0.95);
			padding: 2.5rem;
			border-radius: 24px;
			box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
			max-width: 700px;
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

		.error-header {
			display: flex;
			align-items: center;
			gap: 1rem;
			margin-bottom: 1.5rem;
			padding-bottom: 1rem;
			border-bottom: 2px solid #e2e8f0;
		}

		.error-icon {
			font-size: 3rem;
			color: #9f7aea;
		}

		.error-title {
			font-size: 1.5rem;
			font-weight: 700;
			color: #2d3748;
		}

		.error-subtitle {
			color: #718096;
			font-size: 0.875rem;
		}

		.error-details {
			background: #f7fafc;
			border-radius: 12px;
			padding: 1.5rem;
			margin-bottom: 1.5rem;
		}

		.error-details h4 {
			color: #4a5568;
			font-size: 0.875rem;
			margin-bottom: 0.75rem;
			display: flex;
			align-items: center;
			gap: 0.5rem;
		}

		.error-message {
			font-family: 'Consolas', 'Monaco', monospace;
			font-size: 0.8rem;
			color: #e53e3e;
			background: #fff5f5;
			padding: 1rem;
			border-radius: 8px;
			border-left: 4px solid #e53e3e;
			overflow-x: auto;
			white-space: pre-wrap;
			word-break: break-word;
		}

		.error-actions {
			display: flex;
			gap: 1rem;
			justify-content: flex-end;
			flex-wrap: wrap;
		}

		.btn {
			display: inline-flex;
			align-items: center;
			gap: 0.5rem;
			padding: 0.75rem 1.25rem;
			border-radius: 10px;
			font-weight: 600;
			font-size: 0.875rem;
			text-decoration: none;
			transition: all 0.3s ease;
		}

		.btn-primary {
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			color: white;
		}

		.btn-primary:hover {
			transform: translateY(-2px);
			box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
		}

		.btn-secondary {
			background: #edf2f7;
			color: #4a5568;
		}

		.btn-secondary:hover {
			background: #e2e8f0;
		}
	</style>
</head>

<body>
	<div class="error-container">
		<div class="error-header">
			<div class="error-icon">
				<i class="bi bi-bug-fill"></i>
			</div>
			<div>
				<h1 class="error-title">Exception Error</h1>
				<p class="error-subtitle">Terjadi kesalahan yang tidak terduga</p>
			</div>
		</div>

		<div class="error-details">
			<h4><i class="bi bi-terminal"></i> Detail Error:</h4>
			<div class="error-message"><?php echo $message; ?></div>
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