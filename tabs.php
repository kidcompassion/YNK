<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#canada" aria-controls="canada" role="tab" data-toggle="tab">Canada</a></li>
    <li role="presentation"><a href="#united-states" aria-controls="united-states" role="tab" data-toggle="tab">United States</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="canada"><?php the_field('tabs_canada');?></div>
    <div role="tabpanel" class="tab-pane" id="united-states"><?php the_field('tabs_us');?></div>
  </div>

</div>