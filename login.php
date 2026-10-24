<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      text-align: center;
      width: 350px;
    }
    h1 {
      margin-bottom: 20px;
      color: #333;
    }
    input {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
    }
    button {
      background: #4facfe;
      color: white;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      background: #00c6ff;
      transform: scale(1.05);
    }
    a {
      display: block;
      margin-top: 15px;
      color: #4facfe;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>🔑 Iniciar Sesión</h1>
    <form method="post" action="procesar_login.php">
      <input type="text" name="usuario" placeholder="Usuario" required>
      <input type="password" name="clave" placeholder="Contraseña" required>
      <button type="submit">Entrar</button>
    </form>
    <a href="index.php">⬅ Volver al menú</a>
  </div>
</body>
</html>