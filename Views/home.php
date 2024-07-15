<?php headerAdmin($data) ?>

<div class="row">
						<div class="col-md-4 col-lg-4 col-xl">
							<div class="card shadow hover">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title text-primary">Atletas</h5>
										</div>

										<div class="col-auto">
											<div class="avatar">
												<div class="avatar-title rounded-circle bg-primary-dark">
												</div>
											</div>
										</div>
									</div>
									<h1 class="display-5 mt-1 mb-2 text-primary">69</h1>
								
								</div>
							</div>
						</div>
						<div class="col-md-4 col-lg-4 col-xl">
							<div class="card shadow hover">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title text-success">Estudiantes</h5>
										</div>

										<div class="col-auto">
											<div class="avatar">
												<div class="avatar-title rounded-circle bg-primary-dark">
												</div>
											</div>
										</div>
									</div>
									<h1 class="display-5 mt-1 mb-2 text-success">35</h1>
								
								</div>
							</div>
						</div>
						<div class="col-md-4 col-lg-4 col-xl">
							<div class="card shadow hover">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title text-primary-emphasis">Obreros</h5>
										</div>

										<div class="col-auto">
											<div class="avatar">
												<div class="avatar-title rounded-circle bg-primary-dark">
												</div>
											</div>
										</div>
									</div>
									<h1 class="display-5 mt-1 mb-2 text-primary-emphasis">32</h1>
								
								</div>
							</div>
						</div>
            <div class="col-md-4 col-lg-4 col-xl">
							<div class="card shadow hover">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title text-primary-emphasis">Docente</h5>
										</div>

										<div class="col-auto">
											<div class="avatar">
												<div class="avatar-title rounded-circle bg-primary-dark">
												</div>
											</div>
										</div>
									</div>
									<h1 class="display-5 mt-1 mb-2 text-primary-emphasis">2</h1>
								
								</div>
							</div>
						</div>
                        
                        
</div>
            <div class="row mt-1 p-4">	
                <div class="col-md-12 col-lg-12 col-xl">  
                Los datos mostrados en este tablero no son reales, son solo una vista previa
                </div>
                            <div class="col-md-6 col-lg-6 col-xl">
                            <div class="text-center">
                                    <h5>Atletas por disciplina</h5>
                                </div>
                                <canvas id="myChart"></canvas>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl">
                                <div class="text-center">
                                    <h5>Atletas por area</h5>
                                </div>
                            <canvas id="myChart2"></canvas>
                            </div>
            </div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Fútbol campo', 'Básquet', 'Futbol sala', 'Beisbol', 'Ajedrez', 'Voleibol'],
      datasets: [{
        label: 'Atletas',
        data: [18, 7, 8, 15, 6, 8],
        borderWidth: 3
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  const ctx2 = document.getElementById('myChart2');

  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['Informática', 'Higiene', 'Electrónica', 'Electricidad', 'Farmacia', 'P. Químicos'],
      datasets: [{
        label: 'Atletas',
        data: [9, 10, 15, 12, 9, 8],
        borderWidth: 3
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
 

<?php footerAdmin($data) ?>