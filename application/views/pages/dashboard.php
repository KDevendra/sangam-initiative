<div class="page-content">
   <div class="container-fluid">
      <div class="row">
         <div class="col">
            <div class="h-100">
               <div class="row mb-3 pb-1">
                  <div class="col-12">
                     <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                           <div id="greeting-container">
                              <h4 class="fs-16 mb-1">
                                 <span id="greeting-message"></span>
                                 <?php echo  $this->session->login['user_name']; ?>
                              </h4>
                           </div>
                           <p class="text-muted mb-0">Here's what's happening with your store today.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php
        if(isset($this->session->login['user_level']))
        {
          if ($this->session->login['user_level'] === '1')
          {
            ?>
            <div class="row">
               <div class="col-xl-12">
                  <div class="card">
                     <div class="card-header border-0 align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Visitor's</h4>
                     </div>
                     <div class="card-body p-0 pb-2">
                        <div class="w-100">
                           <canvas id="myChart"></canvas>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php
          }
        }
      ?>
   </div>
</div>
<script>
var visitorLabels = <?php echo $visitorLabels; ?> ;
var visitorData = <?php echo $visitorData; ?> ;
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
   type: 'line',
   data: {
      labels: visitorLabels,
      datasets: [{
         label: 'Website Visitors',
         data: visitorData,
         backgroundColor: 'rgba(54, 162, 235, 0.2)',
         borderColor: 'rgba(54, 162, 235, 1)',
         borderWidth: 1
      }]
   },
   options: {
      scales: {
         xAxes: [{
            type: 'time',
            time: {
               unit: 'day',
               displayFormats: {
                  day: 'YYYY-MM-DD'
               }
            }
         }],
         yAxes: [{
            ticks: {
               beginAtZero: true
            }
         }]
      }
   }
});
</script>
