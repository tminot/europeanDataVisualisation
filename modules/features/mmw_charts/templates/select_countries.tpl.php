<?php

/**
 * @file
 * MMW Charts theme implementation to select_countries field.
 *
 * @package mmw_charts
 *
 * @author Makemeweb
 */
?>

<div class="col-sm-3 col-xs-12">
    <div id="map-chart" class="hidden-xs">
    </div>
    <div id="country-select" class="hidden-xs">
        <?php foreach ($countries_data as $i => $country): ?>
          <?php if(!in_array($country['key'], $countries_exclude)): ?>
              <div class="checkbox checkbox-primary <?php print $country['key']; ?>"><input id="country-check-<?php print $country['key']; ?>" type="checkbox" name="countries[]" value="<?php print $country['mapping']; ?>"<?php print $country['checked']; ?> data-color="<?php print $country['color']; ?>">
                  <label data-color="<?php print $country['color']; ?>" for="country-check-<?php print $country['key']; ?>"> <?php print $country['country']; ?></label>
              </div>
          <?php endif; ?>
          <?php if($i == 0): ?>
              <div class="checkbox checkbox-primary"><input id="all-countries" type="checkbox" name="countries" value="all" <?php print $countries_selected == "all" ? 'checked' : ''; ?>>
              <label for="all-countries"><?php print t('Select All Countries'); ?></label></div>
          <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
