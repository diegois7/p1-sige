<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacto</title>
  </head>
  <body class="bg-light">
    <!-- Contenedor principal -->
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card shadow-lg">
            <div class="card-body">
              <h1 class="text-center text-primary mb-4">Contacto</h1>
              <hr />

              <h2 class="text-secondary text-center">Formulario</h2>

              <form action="/crear-contacto" method="post">
                @csrf
                <!-- Correo -->
                <div class="mb-3">
                  <label for="email" class="form-label">Correo:</label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control"
                    placeholder="ejemplo@email.com"
                    required
                  />
                </div>

                <!-- Mensaje -->
                <div class="mb-3">
                  <label for="mensaje" class="form-label">Comentario/Mensaje:</label>
                  <textarea
                    id="mensaje"
                    name="mensaje"
                    class="form-control"
                    rows="4"
                    placeholder="Escribe tu mensaje aquí..."
                    required
                  ></textarea>
                </div>

                <!-- Clasificación -->
                <div class="mb-3">
                  <label for="clasificacion" class="form-label">Clasificación:</label>
                  <select id="clasificacion" name="clasificacion" class="form-select" required>
                    <option value="contratacion">Contratación</option>
                    <option value="pregunta">Pregunta</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>

                <!-- Botón de envío -->
                <div class="text-center">
                  <button type="submit" class="btn btn-primary px-4 py-2">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>