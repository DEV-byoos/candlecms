<?php
    // Generate HTML. Parameters: column_name, caption, array_of_field_captions
    $HTML = build_md_html_table('ip', 'Ip', array('Content'));
    // Generate global variable and event-binding
    $JS   = build_md_global_variable_script('ip', 'id', $date_format, $result, $options);
    $JS  .= build_md_event_script('ip', '{{ module_site_url }}manage_label/index/insert', '{{ module_site_url }}manage_label/index/update');
    // Show HTML
    echo $HTML;
    // Show JS
    echo '<script type="text/javascript">'.$JS.'</script>';
?>
<script type="text/javascript">

    // Function to get default value
    function default_row_ip(){
        return {
            content : '',        };
    }

    // Function to add row
    function add_table_row_ip(value){

        // Prepare some variables
        var input_prefix = 'md_field_ip_col';
        var row_index    = RECORD_INDEX_ip;
        var inputs       = new Array();

        // FIELD "content"
        var input_id    = input_prefix + 'content' + row_index;
        var field_value = get_object_property_as_str(value, 'content');
        var html = '<textarea id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+'" column_name="content" type="text">'+field_value+'</textarea>';
        inputs.push(html);

        // Return inputs
        return inputs;
    }

</script>
