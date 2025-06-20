<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Todo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    /* Reset & Base */
    *, *::before, *::after {
      box-sizing: border-box;
    }
    body, h1, h2, p, button {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
      background: linear-gradient(135deg, #ffffff 0%, #2575fc 100%);
      color: white;
      display: flex;
      min-height: 100vh;
      align-items: center;
      justify-content: center;
      padding: 1rem;
    }
    .container {
      max-width: 900px;
      text-align: center;
      background: rgba(0, 0, 0, 0.4);
      padding: 3rem;
      border-radius: 15px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.3);
      backdrop-filter: blur(10px);
    }
    h1 {
      font-size: 3.5rem;
      font-weight: 900;
      letter-spacing: 0.05em;
      margin-bottom: 0.5rem;
      text-transform: uppercase;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
    }
    h2 {
      font-size: 1.75rem;
      font-weight: 400;
      margin-bottom: 2.5rem;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.3);
      color: #dcdcdc;
    }
    button.cta {
      background: #ff5f6d;
      background: linear-gradient(45deg, #ff5f6d, #ffc371);
      border: none;
      padding: 1rem 3rem;
      border-radius: 50px;
      font-size: 1.25rem;
      font-weight: 700;
      color: white;
      cursor: pointer;
      box-shadow: 0 6px 15px rgba(255, 95, 109, 0.6);
      transition: all 0.3s ease;
      user-select: none;
    }
    button.cta:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 20px rgba(255, 95, 109, 0.8);
    }
    button.cta:focus {
      outline: none;
      box-shadow: 0 0 0 4px rgba(255, 95, 109, 0.6);
    }
    footer {
      margin-top: 3rem;
      font-size: 0.9rem;
      opacity: 0.7;
    }
    @media (max-width: 600px) {
      h1 {
        font-size: 2.5rem;
      }
      h2 {
        font-size: 1.25rem;
      }
      button.cta {
        padding: 0.85rem 2.5rem;
        font-size: 1.1rem;
      }
    }
  </style>
</head>
<body>
  <div class="container" role="main">
    <h1>Welcome</h1>
    <h2>Todo List</h2>
  <a href="/login" type="button" class="btn btn-primary">Masuk</a>

  </div>
</body>
</html>

