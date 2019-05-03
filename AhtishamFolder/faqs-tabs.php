    <h3><?php echo cs_get_option('st_faqs_heading'); ?></h3>
    <p><?php echo cs_get_option('st_faqs_description'); ?></p>
    
    <!--
        accordion is a component which organizes content within collapsable items
      -->
    <div class="accordion-header"><div class="accordion-title"><?php echo $faq['st_faq_title']; ?></div></div>
    <div class="accordion-content"><?php echo $faq['st_faq_content']; ?></div>