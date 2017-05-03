<?php
/**
 * ======================================
 * Filter: wp_all_export_additional_data
 * ======================================
 * Create additional fields for export. 
 * NOTE: Works with XML exports only, not CSV*
 *
 * @param $add_data array - any additional data to export to this array
 * @param $options ??
 *
 * @return array
 */
function wpae_additional_data($add_data, $options)
{
    // $add_data['my_field'] = 'value';
    return $add_data;
}
add_filter('wp_all_export_additional_data', 'wpae_additional_data', 10, 2);


// ----------------------------
// Example uses below
// ----------------------------

/**
 * Example: adds a "created_at" element to the export
 * Example result: http://d.pr/i/BYOAs/4LARjuPi
 */
function wpae_additional_data_field($add_data, $options)
{
    $add_data['created_at'] = date("Y-m-d H:i:s");
    return $add_data;
}
add_filter('wp_all_export_additional_data', 'wpae_additional_data_field', 10, 2);
