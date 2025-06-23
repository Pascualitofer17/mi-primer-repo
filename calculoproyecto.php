<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Calificaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h3 class="text-center">Conversor de Calificaciones</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="nota100" class="form-label">Nota sobre 100 puntos:</label>
                                <input type="number" 
                                       class="form-control" 
                                       id="nota100" 
                                       name="nota100" 
                                       min="0" 
                                       max="100" 
                                       step="0.01"
                                       required>
                                <div class="form-text">Ingresa tu calificación (0 - 100)</div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Convertir a nota sobre 20</button>
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $nota100 = floatval($_POST["nota100"]);
                            
                            // Validar rango
                            if ($nota100 < 0 || $nota100 > 100) {
                                echo '<div class="alert alert-danger mt-3">Error: La nota debe estar entre 0 y 100</div>';
                            } else {
                                // Calcular nota sobre 20
                                $nota20 = ($nota100 * 20) / 100;
                                
                                // Formatear resultado
                                echo '<div class="alert alert-success mt-3">';
                                echo '<h4 class="alert-heading">Resultado:</h4>';
                                echo '<p class="mb-0">'.number_format($nota100, 2).'/100 = <strong>'.number_format($nota20, 2).'/20</strong></p>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                    <div class="card-footer text-muted text-center">
                        Fórmula: (Nota sobre 100 × 20) ÷ 100
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>