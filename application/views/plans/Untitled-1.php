     <div class="<?php echo ($value['recommended'] == 1) ? "recmd" : ""; ?>">
      <div class="Recommed col-sm-12 col-md-12 col-lg-12">
          <?php if ($value['recommended'] == 1): ?>
              <p class="high_light">Recommended</p>
          <?php endif; ?>
      </div>
  </div>


  \\\\

  <?php
// Sample array of objects
$plans = [
    [
        'plan_id' => 3,
        'plan_name' => 'Test',
        'recommended' => 0
    ],
    [
        'plan_id' => 5,
        'plan_name' => 'VedaErp',
        'recommended' => 1
    ],
    [
        'plan_id' => 6,
        'plan_name' => 'VedaERP Update',
        'recommended' => 1
    ]
];

$recommendedFound = false;


foreach ($plans as &$plan) {
    if ($plan['recommended'] == 1 && !$recommendedFound) {
        $recommendedFound = true;
    } else {
        $plan['recommended'] = 0;
    }
}

print_r($plans);
?>
