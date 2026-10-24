<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #43e97b, #38f9d7);
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
      background: #43e97b;
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
      background: #38f9d7;
      transform: scale(1.05);
    }
    a {
      display: block;
      margin-top: 15px;
      color: #43e97b;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>📝 Registro</h1>
    <form method="post" action="procesar_registro.php">
      <input type="text" name="usuario" placeholder="Usuario" required>
      <input type="email" name="correo" placeholder="Correo electrónico" required>
      <input type="password" name="clave" placeholder="Contraseña" required>
      <button type="submit">Registrarse</button>
    </form>
    <a href="index.php">⬅ Volver al menú</a>
  </div>
</body>
</html>