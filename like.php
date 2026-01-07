<?php
include("conexion.php");

if (isset($_POST['like_id'])) {
    $id = $_POST['like_id'];

    // Aumenta el contador de likes
    $sql = "UPDATE galeria SET likes = likes + 1 WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Devuelve la nueva cantidad de likes
    $sql = "SELECT likes FROM galeria WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $likes = $stmt->fetchColumn();

    echo json_encode([
        'success' => true,
        'likes' => $likes
    ]);
} else {
    echo json_encode(['success' => false]);
}
?>
