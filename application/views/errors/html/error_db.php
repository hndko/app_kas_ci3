<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Database Error | E-KAS</title>
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
			background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
			padding: 20px;
		}

		.error-container {
			text-align: center;
			background: rgba(255, 255, 255, 0.95);
			padding: 3rem;
			border-radius: 24px;
			box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
			max-width: 550px;
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
			color: #f6ad55;
			margin-bottom: 1rem;
			animation: pulse 2s ease-in-out infinite;
		}

		@keyframes pulse {

			0%,
			100% {
				transform: scale(1);
			}

			50% {
				transform: scale(1.1);
			}
		}

		.error-title {
			font-size: 1.75rem;
			font-weight: 700;
			color: #2d3748;
			margin-bottom: 1rem;
		}

		.error-subtitle {
			color: #718096;
			margin-bottom: 1.5rem;
		}

		.error-message {
			color: #4a5568;
			margin-bottom: 2rem;
			line-height: 1.6;
			background: #fffaf0;
			padding: 1rem;
			border-radius: 12px;
			border-left: 4px solid #f6ad55;
			text-align: left;
			font-family: 'Consolas', 'Monaco', monospace;
			font-size: 0.875rem;
			overflow-x: auto;
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

		.tips {
			margin-top: 2rem;
			padding-top: 1.5rem;
			border-top: 1px solid #e2e8f0;
			text-align: left;
		}

		.tips h4 {
			color: #4a5568;
			font-size: 0.875rem;
			margin-bottom: 0.75rem;
		}

		.tips ul {
			color: #718096;
			font-size: 0.8rem;
			padding-left: 1.25rem;
		}

		.tips li {
			margin-bottom: 0.25rem;
		}
	</style>
</head>

<body>
	<div class="error-container">
		<div class="error-icon">
			<i class="bi bi-database-exclamation"></i>
		</div>
		<h1 class="error-title"><?php echo $heading; ?></h1>
		<p class="error-subtitle">Terjadi kesalahan pada koneksi database</p>
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

		<div class="tips">
			<h4><i class="bi bi-lightbulb"></i> Tips Pemecahan Masalah:</h4>
			<ul>
				<li>Periksa konfigurasi database di file .env</li>
				<li>Pastikan server database sedang berjalan</li>
				<li>Verifikasi nama database sudah benar</li>
				<li>Cek username dan password database</li>
			</ul>
		</div>
	</div>
</body>

</html>