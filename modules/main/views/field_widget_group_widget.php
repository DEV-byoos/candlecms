<?php
    // Generate HTML. Parameters: column_name, caption, array_of_field_captions
    $HTML = build_md_html_table('group_widget', 'Group Widget', array('Group'));
    // Generate global variable and event-binding
    $JS   = build_md_global_variable_script('group_widget', 'id', $date_format, $result, $options);
    $JS  .= build_md_event_script('group_widget', '{{ module_site_url }}manage_widget/index/insert', '{{ module_site_url }}manage_widget/index/update');
    // Show HTML
    echo $HTML;
    // Show JS
    echo '<script type="text/javascript">'.$JS.'</script>';
?>
<script type="text/javascript">

    // Function to get default value
    function default_row_group_widget(){
        return {
            group_id : '',        };
    }

    // Function to add row
    function add_table_row_group_widget(value){

        // Prepare some variables
        var input_prefix = 'md_field_group_widget_col';
        var row_index    = RECORD_INDEX_group_widget;
        var inputs       = new Array();
        
        // FIELD "group_id"
        var input_id    = input_prefix + 'group_id' + row_index;
        var field_value = get_object_property_as_str(value, 'group_id');
        var html = '<select id="'+input_id+'" record_index="'+row_index+'" class="'+input_prefix+' numeric chzn-select" column_name="group_id" >';
        html += build_single_select_option(field_value, OPTIONS_group_widget.group_id);
        html += '</select>';
        inputs.push(html);

        // Return inputs
        return inputs;
    }

</script>
