<!-- /container -->

<div class="container">
<div class="content-bar col-md-8 pull-right">
  <h3>
    <?=$heading;?>
  </h3>
  <hr class="divider">
  <p><em>The FCCG develops a series of written materials, including brochures, newsletters, and workbooks that provide a wealth of information on particular populations or aspects of gambling.</em></p>
  <br /><hr /><br />
  <!-- body content here -->
  <div class="body-content">
    <p>The FCCG has conducted and sponsored research regarding gambling participation rates, problem gambling prevalence, and impacts among adolescents, adults, and senior citizens. In addition, FCCG Think Tanks have convened experts and issued reports on older adults and gambling, problem gambling and crime, the role and impact of gambling on credit, and strategies and approaches to community mobilization.</p>
    <a href="<?=site_url('assets/research_pdfs/Gambling_and_Problem_Gambling_Prevalence_Among_Adults_in_Florida.pdf');?>" target="_blank" title="Gambling and Problem Gambling Prevalence among Adults in Florida: A 2011 Replication">
    <p>Prevalence Among Adults in Florida: A Replication <br />
    <strong>Gambling and Problem Gambling Prevalence among Adults in Florida: A 2011 Replication</strong> </p> </a>
    <p>A Report for the Florida Council on Compulsive Gambling. Robert J. Rotunda, University of West Florida and Terry L. Schell, Consultant University of West Florida With Robin Beckman, Carlos Fabre Estrada, Rachel Smith, and Eileen Wolfe, 2012.</p>
    <br />
    <br />
    <h4>Available Research Materials <small class="pull-right">&nbsp; PDF documents</small></h4>
    <hr class="divider" />
    <div class="programs">
      <?php foreach($research as $re): ?>
      <div class="toolkit-holder">
        <div class="media">
          <div class="media-body">
            <h4 class="media-heading"> 
              <small class="text-muted"><span class="glyphicon glyphicon-file">&nbsp;</span></small> 
              <a href="<?=site_url('assets/research_pdfs/'.$re->pdf_path);?>" title="View <?=$re->title;?>" target="_blank">
                <?=$re->title;?>
              </a> </h4>
            <p>
              <?=html_entity_decode($re->content);?>
            </p>
          </div>
        </div>
      </div>
      <hr class="divider" />
      <?php endforeach; ?>
    </div>
  </div>
  <hr class="divider" />
  <p>Thankfully, help is available and gambling addiction can be treated if recognized. If you need assistance, contact our 24 hour, confidential Helpline <strong>888-ADMIT-IT <small>(888-236-4848)</small></strong> for resources and supports.</p>
</div>
