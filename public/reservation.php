<?php include './php/components/header.php'; ?>
</head>
<?php
if (isset ($_GET['id'])) {
    require_once './php/modele/modele_house.php';
    $modeleHouse = new ModeleHouse();
    $house = $modeleHouse->getHouse($_GET['id']);
    if ($house == null) {
        header('Location: ./sejour.php');
        exit;
    }
} else {
    header('Location: ./sejour.php');
    exit;
}
?>
<div class="container">


    <div class="calendar-container text-center">
        <h2>Réservation pour
            <?php echo $house['Nom']; ?>
        </h2>
        <?php include './php/components/calendar.php'; ?>
    </div>

    <?php if (isset ($_GET['resa'])): ?>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        Détails de la réservation
                    </div>
                    <div class="card-body">
                        <form action="./php/functions/reservation.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

                            <div class="mb-3">
                                <label for="DateD" class="form-label">Date de Début</label>
                                <input class="form-control" name="DateD" readonly type="date"
                                    value="<?php echo htmlspecialchars($_GET['year'] . '-' . $_GET['month'] . '-' . $_GET['resa']); ?>"
                                    id="DateD">
                            </div>

                            <div class="mb-3">
                                <label for="DateF" class="form-label">Date de Fin</label>
                                <input class="form-control" name="DateF" type="date"
                                    min="<?php echo htmlspecialchars($_GET['year'] . '-' . $_GET['month'] . '-' . $_GET['resa']); ?>"
                                    id="DateF">
                            </div>

                            <div class="mb-3">
                                <label for="NbPers" class="form-label">Nombre de Voyageurs</label>
                                <select class="form-select" id="NbPers" name="NbPers">
                                    <option>Choisir...</option>
                                    <?php for ($i = 1; $i <= 10; $i++): ?>
                                        <option value="<?php echo $i; ?>">
                                            <?php echo $i; ?>
                                        </option>
                                    <?php endfor; ?>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Confirmer la réservation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
</main>
<script>
    function calculatePrice() {
        const startDate = new Date(document.getElementById('DateD').value);
        const endDate = new Date(document.getElementById('DateF').value);
        const diffTime = Math.abs(endDate.getTime() - startDate.getTime());
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        const pricePerDay = parseFloat(document.getElementById('prixj').textContent);
        const totalPrice = diffDays * pricePerDay;
        document.getElementById('price').textContent = totalPrice.toFixed(2);
    }
</script>

</body>

</html>