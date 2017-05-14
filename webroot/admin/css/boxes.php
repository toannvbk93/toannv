<?php
header('Content-type: text/css');
include("../../include/config.php");
$iurl = $config['adminurl']."/images";
?>
#loading-process
{
 position:absolute; top:45%; left:50%; margin-left:-60px; border:2px solid #f1af73; padding:15px 60px; background:#fff4e9; color:#d85909; font-size:1.1em; font-weight:bold; text-align:center; z-index:501
}
#loading-mask
{
 position:absolute; color:#d85909; font-size:1.1em; font-weight:bold; text-align:center; filter:alpha(opacity=80); -moz-opacity:0.80; opacity:0.80; z-index:500
}
#loading-mask .loader
{
 position:fixed; top:45%; left:50%; width:120px; margin-left:-60px; padding:15px 60px; background:#fff4e9; border:2px solid #f1af73; color:#d85909; font-weight:bold; text-align:center; z-index:1000
}
#message-popup-window-mask
{
 position:absolute; color:#d85909; font-size:1.1em; font-weight:bold; text-align:center; filter:alpha(opacity=80); -moz-opacity:0.80; opacity:0.80; z-index:500
}
#message-popup-window-mask .flash-window
{
 position:fixed; top:45%; left:50%; z-index:1000; margin-left:-207px; margin-top:-70px
}
.grid 
{
position:relative;border-bottom:0;padding-bottom:.5em
}
.grid table 
{
width:100%;border:1px solid #cbd3d4;border-bottom:none
}
.grid table.border 
{
border:1px solid #cbd3d4
}
.grid tbody 
{
background:#fff
}
 .grid tr.even,.grid tr.even tr
{
background:#f6f6f6
}
.grid tr.on-mouse 
{
background:#fcf5dd
}
.grid tr.invalid 
{
background-color:#d3a5ba !important
}
.grid th,.grid td 
{
padding:2px 4px 2px 4px
}
.grid th 
{
white-space:nowrap
}
.grid td input.input-text 
{
width:86%!important
}
.grid table td 
{
border-width:0 1px 1px 0;border-color:#dadfe0;border-style:solid
}
.grid table.border td 
{
background:#fff !important
}
.grid table td.last 
{
border-right:0
}
.grid table td.product 
{
text-align:right
}
.grid table td.empty-text 
{
padding:15px
}
.grid table td .action-select 
{
width:100%
}
.grid .separator 
{
padding:0 4px;color:#b9b9b9
}
.grid tbody.odd tr 
{
background:#fff !important
}
.grid tbody.even tr 
{
background:#f6f6f6 !important
}
.grid tbody.odd tr td,.grid tbody.even tr td 
{
border-bottom:0
}
.grid tbody.odd tr.border td,.grid tbody.even tr.border td 
{
border-bottom:1px solid #dadfe0
}
table.actions 
{
width:100%;margin:.5em 0
}
table.actions td 
{
vertical-align:top
}
.pager select 
{
width:4em!important;margin:0 4px
}
.pager input.page 
{
width:2em !important
}
.pager .arrow 
{
margin:0 3px;vertical-align:middle
}
.grid tr.headings              
{
background:url(<?php echo $iurl;?>/sort_row_bg.gif) 0 50% repeat-x
}
.grid tr.headings th
{
 border-width:1px; border-color:#f9f9f9 #d1cfcf #f9f9f9 #f9f9f9; border-style:solid; padding-top:1px; padding-bottom:0; font-size:.9em
}
.grid tr.headings th.last
{
border-right:0
}
.grid tr.headings th.no-link
{
    padding-top:2px;    padding-bottom:1px;    color:#67767e
}
.grid tr.headings th a,.grid tr.headings th a:hover
{
    display:block;    padding:2px 4px 1px 0;    color:#2d444f;    text-decoration:none
}
.grid tr.headings th a:hover   
{
color:#d85909
}
.grid th a.sort-arrow-desc,.grid th a.sort-arrow-asc
{
    background:url(<?php echo $iurl;?>/sort_on_bg.gif) no-repeat;    border-bottom:1px solid #fff;    border-right:1px solid #fff;    padding-bottom:2px
}
.grid tr.headings th a.sort-arrow-asc,.grid tr.headings th a.sort-arrow-asc:hover,.grid tr.headings th a.sort-arrow-desc,.grid tr.headings  th a.sort-arrow-desc:hover
{
    text-decoration:none
}
.grid th .sort-arrow-desc span.sort-title,.grid th .sort-arrow-asc span.sort-title
{
    background-position:right 50%;    background-repeat:no-repeat;    padding:3px 11px 2px 8px
}
.grid .sort-arrow-desc span.sort-title 
{
background-image:url(<?php echo $iurl;?>/grid_sort_desc.gif)
}
.grid .sort-arrow-asc span.sort-title  
{
background-image:url(<?php echo $iurl;?>/grid_sort_asc.gif)
}
.massaction
{
    width:100%;    height:26px;    border:1px solid #d1cfcf;    border-bottom:none;    background:url(<?php echo $iurl;?>/massaction_bg.gif) repeat-x 0 100% #ebebeb; font-size:.9em
}
.massaction td 
{
width:50%;border-top:1px solid #fff;padding:1px 8px;vertical-align:middle
}
.massaction .entry-edit fieldset .select 
{
width:120px;display:inline
}
.massaction .entry-edit fieldset 
{
margin:0;padding:0;background:none;border:none
}
.massaction .entry-edit fieldset .field-row
{
display:inline
}
.massaction .entry-edit .field-row label 
{
float:none;width:auto;margin-left:13px
}
.massaction .entry-edit 
{
margin:0 !important;padding:0
}
.massaction a
{
text-decoration:none
}
.massaction .entry-edit fieldset span.form_row,.massaction .entry-edit fieldset span.field-row
{
 clear:none !important; display:inline; float:left !important; margin:0; padding:0px 5px 0px 0px
}
.massaction .entry-edit .outer-span
{
float:left
}
.grid tr.filter                
{
background:url(<?php echo $iurl;?>/filter_row_bg.gif) repeat-x #e3eff1;cursor:default
}
.grid tr.filter th
{
 padding-top:5px; padding-bottom:5px; border-width:0 1px 1px 0; border-style:solid; border-color:#bdbdbd; white-space:normal
}
.grid tr.filter th.last 
{
border-right:0
}
.grid tr.filter input 
{
width:86% !important
}
.grid tr.filter select 
{
width:100% 
}
.grid tr.filter .range div.range-line
{
margin-bottom:4px;width:100px
}
.grid tr.filter .range div.date
{
min-width:115px
}
.grid tr.filter .range input 
{
width:4em !important;margin-bottom:-1px;margin-top:0
}
.grid tr.filter .range select 
{
width:5em !important;width:4.88em;margin-bottom:-1px;margin-top:0
}
.grid tr.filter .range .label 
{
display:block;width:3em;float:left;padding-left:2px
}
.grid tr.filter .date img 
{
width:15px;height:15px;cursor:pointer;vertical-align:middle
}
.grid th span.sort-title 
{
display:block;padding:3px 12px 4px 0;line-height:1em
}
.grid .head-massaction select 
{
width:50px !important
}
.grid table tfoot tr 
{
background:#D7E5EF
}
.grid table tfoot tr td 
{
border-top:1px solid #9babb9;background:#e5ecf2;line-height:1.7em
}
.grid table.border tfoot tr td 
{
background:#D7E5EF !important
}
 .dynamic-grid th 
{
padding:2px;width:100px
}
.dynamic-grid td 
{
padding:2px
}
.dynamic-grid td input 
{
width:94px
}
tr.dynamic-grid td,tr.dynamic-grid th
{
padding:2px 10px 2px 0;width:auto
}
tr.dynamic-grid .input-text
{
padding:2px;width:160px!important
}
dl.accordion .grid     
{
margin-bottom:0
}
dl.accordion dt,.entry-edit .entry-edit-head
{
background:#6f8992;padding:2px 10px
}
dl.accordion dt,div.collapseable
{
margin-top:1px
}
dl.accordion dt a,div.collapseable a
{
    display:block;    background:url(<?php echo $iurl;?>/entry_edit_head_arrow_down.gif) 100% 50% no-repeat;    color:#fff;    font-weight:bold;    text-decoration:none
}
.entry-edit fieldset.collapseable
{
margin-bottom:10px
}
dl.accordion dt a:hover,div.collapseable a:hover
{
color:#fff;text-decoration:none
}
dl.accordion dt.open a,div.collapseable a.open 
{
background:url(<?php echo $iurl;?>/entry_edit_head_arrow_up.gif) 100% 50% no-repeat
}
dl.accordion dd 
{
display:none
}
dl.accordion dd.open 
{
display:block
}
img.accordion-btn 
{
float:right;margin-top:1px;margin-right:5px
}
ul.tabs 
{
border-top:1px solid #bebebe;background-color:#e7efef
}
ul.tabs li 
{
list-style:none
}
ul.tabs a,ul.tabs span 
{
display:block
}
ul.tabs a,ul.tabs a:hover 
{
text-decoration:none
}
ul.tabs a,ul.tabs a:hover     
{
color:#000
}
ul.tabs,ul.tabs a             
{
background:url(<?php echo $iurl;?>/tabs_link_bg.gif) repeat-y 100% #E7EFEF
}
ul.tabs a:hover                
{
background-color:#D8E6E6;background-image:url(<?php echo $iurl;?>/tabs_link_over_bg.gif)
}
ul.tabs a.active               
{
padding:0;border-bottom:1px solid #bebebe;background:none
}
ul.tabs a:hover.active         
{
padding:0
}
ul.tabs span                   
{
background:url(<?php echo $iurl;?>/tabs_span_bg.gif) repeat-x 0 100%;padding:.3em 0.5em .28em 1.5em;cursor:pointer
}
ul.tabs span em                
{
float:right
}
ul.tabs a.active span,ul.tabs a:hover.active span    
{
background:#fff;font-weight:bold
}
ul.tabs a.subitem              
{
padding-left:2.2em
}
ul.tabs span.changed,ul.tabs span.error             
{
float:right;background:0;padding:0
}
ul.tabs a.changed span.changed 
{
background:url(<?php echo $iurl;?>/fam_bullet_disk.gif) 0 0 no-repeat !important;width:16px;height:16px
}
ul.tabs a.error span.error     
{
background:url(<?php echo $iurl;?>/fam_bullet_error.gif) 0 0 no-repeat !important;width:16px;height:16px
}
ul.tabs a.changed 
{
font-style:italic
}
ul.tabs-horiz                  
{
list-style:none;margin:0 0 18px 0;background:url(<?php echo $iurl;?>/horiz_tabs_ul_bg.gif) repeat-x 0 100% #f8f8f8;padding:8px 0 0 5px
}
ul.tabs-horiz li 
{
float:left;margin:0 4px
}
ul.tabs-horiz li a 
{
display:block;background:#e2e2e2;border:1px solid #ccc;padding:2px 10px;color:#333 !important;text-decoration:none !important
}
ul.tabs-horiz li a.notloaded 
{
color:#999 !important
}
ul.tabs-horiz li a.active 
{
border-bottom:1px solid #fff;background:#fff
}
.notification-global
{
padding:5px 27px 5px 47px;background:#fff9e9 url(<?php echo $iurl;?>/error_msg_icon.gif) 27px 5px no-repeat;border-bottom:1px solid #eee2be;font-size:11px;line-height:16px;margin:0 0 -3px;color:#444;position:relative
}
.notification-global .label
{
color:#eb5e00
}
.notification-global .clickable
{
cursor:pointer
}
.notification-global span.critical
{
color:#d20000
}
.notification-global a:hover
{
text-decoration:none
}
.error,a.error span,.required,.validation-advice     
{
color:#D40707 !important;font-style:bold !important
}
.notice                
{
color:#ea7601
}
.messages ul           
{
border:0 !important
}
.messages li
{
    min-height:23px !important;    margin-bottom:11px !important;    padding:8px 8px 2px 32px !important;    font-size:.95em !important;    font-weight:bold !important;    list-style:none
}
.messages ul li
{
    margin:0 0 3px 0 !important;    border:0 !important;    padding:0 !important
}
.error-msg
{
    border:1px solid #f16048 !important;    color:#df280a !important;    background:#faebe7 url(<?php echo $iurl;?>/error_msg_icon.gif) no-repeat 10px 10px !important
}
.success-msg
{
    border:1px solid #95a486 !important;    color:#3d6611 !important;    background:#eff5ea url(<?php echo $iurl;?>/success_msg_icon.gif) no-repeat 10px 10px !important
}
.notice-msg
{
    border:1px solid #ffd967 !important;    background:#fffbf0 url(<?php echo $iurl;?>/note_msg_icon.gif) no-repeat 10px 10px !important;    color:#3d6611 !important
}
.warning-msg
{
    border:1px solid #666e73 !important;    background:#e6e6e6 url(<?php echo $iurl;?>/warning_msg_icon.gif) no-repeat 10px 10px !important;    color:#000 !important
}
.validation-advice
{
    clear:both;    min-height:15px;    margin:3px 0 0 9px;    background:url(<?php echo $iurl;?>/validation_advice_bg.gif) no-repeat 2px 1px; padding-left:16px; font-size:.95em; font-weight:bold; line-height:1.25em
}
input.validation-failed,textarea.validation-failed
{
 background:#fef0ed; border:1px dashed #d6340e
}
select.countries option 
{
background-repeat:no-repeat
}
.entry-edit .tree li 
{
margin:0
}
 table.form-edit 
{
width:100%
}
.box,.entry-edit fieldset,.entry-edit .fieldset 
{
margin-bottom:1.5em;padding:1em 1.5em 1.2em 1.5em
}
.entry-edit .entry-edit-head h4 
{
float:left;padding:0;background:none;margin:0;color:#fff;font-size:1em;line-height:18px;min-height:0
}
.entry-edit .entry-edit-head strong,.entry-edit .entry-edit-head a 
{
color:#fff;font-size:1em;line-height:18px;min-height:0;font-weight:bold
}
.entry-edit .content 
{
margin-left:0 !important;padding:10px 15px
}
.entry-edit fieldset li 
{
list-style:none;margin:4px 0
}
.entry-edit fieldset input.input-text,.entry-edit fieldset textarea 
{
width:270px
}
.entry-edit fieldset textarea 
{
height:12em
}
.entry-edit fieldset select 
{
width:276px
}
.entry-edit fieldset span.form_row,.entry-edit fieldset .field-row .hint 
{
float:left;color:#999;padding-left:12em
}
.entry-edit .form-buttons 
{
float:right;margin:2px -3px 2px 0pt
}
label.inline 
{
float:none!important;width:auto!important
}
.nested-content .entry-edit 
{
margin-left:2em
}
.nested-content .entry-edit .entry-edit
{
margin-left:0
}
input.input-text,textarea,select 
{
 border-width:1px; border-style:solid; border-color:#aaa #c8c8c8 #c8c8c8 #aaa; background:#fff; font:12px arial,helvetica,sans-serif
}
select 
{
min-height:19px
}
input.input-text,textarea 
{
padding:2px
}
input.qty 
{
width:40px !important
}
input.item-qty 
{
width:22px !important
}
input.price 
{
width:50px !important;text-align:right
}
select optgroup 
{
font-style:normal
}
select optgroup option 
{
padding-left:10px
}
 .form-list                     
{
width:auto;border:none !important
}
.main-col .form-list           
{
width:auto
}
.form-list td                  
{
border:none !important;padding-top:5px !important;padding-bottom:5px !important;background:none !important
}
.form-list td.hidden           
{
border:none !important;padding:0px !important;background:none !important
}
.form-list td.label            
{
width:150px
}
.form-list td.label label      
{
display:block;width:150px;padding-right:15px
}
.columns .form-list td.value            
{
width:auto;padding-right:5px
}
.columns .form-list td.value input.input-text
{
width:260px
}
.columns .form-list td.value textarea   
{
width:90%
}
.columns .form-list td.value select     
{
width:267px
}
.columns .form-list td.use-default      
{
padding-left:15px
}
.columns .form-list td.value .next-toinput
{
width:75px;display:inline;margin-right:5px
}
.columns .form-list td.value .next-toselect .input-text
{
width:180px;display:inline
}
.columns .form-list td.value            
{
width:270px;padding-right:5px
}
.columns .form-list td.value input.input-text,.columns .form-list td.value textarea   
{
width:260px
}
.columns .form-list td.value select     
{
width:267px
}
.form-list td.note             
{
background:url(<?php echo $iurl;?>/note_cell_bg.gif) no-repeat 6px 10px !important;padding-left:18px
}
.form-list td.scope-label 
{
padding-left:5px;color:#6f8992;font-size:.9em
}
.multi-input 
{
margin-bottom:8px
}
.grid tr .form-list tr 
{
background:#fff !important
}
.grid tr.even .form-list tr 
{
background:#f6f6f6 !important
}
.grid tr.on-mouse .form-list tr
{
background:#fcf5dd !important
}
.grid tr .form-list 
{
margin:8px 0
}
.field-row 
{
display:block;margin-bottom:5px
}
.entry-edit .field-row 
{
display:block
}
.entry-edit .field-row label 
{
float:left;width:150px
}
.content-buttons.form-buttons,.content-header .form-buttons  
{
text-align:right;white-space:nowrap;margin-bottom:0px
}
.content-header .content-buttons-placeholder
{
display:inline!important
}
.content-header .form-buttons  
{
float:right
}
.content-header td.form-buttons  
{
float:none
}
.content-header .form-buttons button
{
margin-bottom:3px
}
.sub-btn-set
{
    border-width:0 1px;    border-color:#ddd;    border-style:solid;    background:url(<?php echo $iurl;?>/sub_button_bg.gif) repeat;    padding:3px 10px;    text-align:right
}
button,.form-button
{
    border-width:1px;    border-style:solid;    border-color:#ed6502 #a04300 #a04300 #ed6502;    padding:0 7px 1px 7px;    background:url(<?php echo $iurl;?>/btn_bg.gif) #ffac47 repeat-x 0 100%;    color:#fff;    font:bold 12px arial,helvetica,sans-serif;    cursor:pointer;    text-align:center !important;    white-space:nowrap
}
button:hover                   
{
background:url(<?php echo $iurl;?>/btn_over_bg.gif) repeat-x 0 0 #f77c16
}
button:active                  
{
background:url(<?php echo $iurl;?>/btn_on_bg.gif) repeat-x 0 0 #f77c16
}
button span                    
{
line-height:1.35em;background-repeat:no-repeat;background-position:0 50%
}
button.delete,button.save,button.add                     
{
padding-left:6px
}
button.cancel span,button.delete span,button.save span,button.add span,button.back span
{
padding-left:20px
}
button.back
{
    border-color:#ccc #aaa #aaa #ccc;    background-color:#fff;    background-image:url(<?php echo $iurl;?>/btn_back_bg.gif);    color:#555
}
button.back span               
{
background-image:url(<?php echo $iurl;?>/icon_btn_back.gif)
}
button.cancel:active           
{
background-image:url(<?php echo $iurl;?>/cancel_btn_active_bg.gif)
}
button.cancel,button.delete   
{
    border-color:#d24403 #a92000 #a92000 #d24403;    background-image:url(<?php echo $iurl;?>/cancel_btn_bg.gif);    background-color:#fcaf81;    color:#fff
}
button.cancel:hover,button.delete:hover
{
background-image:url(<?php echo $iurl;?>/cancel_btn_over_bg.gif)
}
button.cancel:active,button.delete:active           
{
background-image:url(<?php echo $iurl;?>/cancel_btn_active_bg.gif);background-color:#e0612f
}
button.cancel span,button.delete span
{
    background-image:url(<?php echo $iurl;?>/cancel_btn_icon.gif)
}
button.add span    
{
background-image:url(<?php echo $iurl;?>/add_btn_icon.gif)
}
button.save span   
{
background-image:url(<?php echo $iurl;?>/save_btn_icon.gif)
}
button.disabled,button.disabled:hover,button.disabled:active 
{
border-width:1px;border-style:solid;border-color:#4b6e7c #344d56 #344d56 #4b6e7c;background:#6f8992;color:#ededed;cursor:default
}
button.icon-btn
{
width:32px!important
}
button.icon-btn span
{
text-indent:-999em;display:block;width:16px;padding:0px;overflow:hidden
}
.switcher 
{
margin-bottom:10px;border:1px solid #cddddd;background:#e7efef;padding:10px
}
.side-col .switcher 
{
margin-right:20px;margin-bottom:20px
}
.side-col .switcher select
{
width:95%
}
.catalog-categories .side-col .switcher
{
margin-right:0;margin-bottom:15px
}
.box-left,.box-right 
{
width:48.5%
}
.box-left 
{
float:left
}
.box-right 
{
float:right
}
.box-left .content,.box-right .content 
{
padding:6px 14px
}
.separator,.pipe 
{
padding:0 6px;font-size:.9em
}
.divider 
{
display:block;height:1px;margin:8px 0;background:#ddd;overflow:hidden
}
 td.divider 
{
font-size:1px;line-height:0
}
.box,.entry-edit fieldset,.entry-edit .fieldset
{
 border:1px solid #d6d6d6; background:#fafafa
}
  .scroll-cont
{
    position:absolute;    top:-25px;    left:503px;    width:16px;    height:265px;    background:transparent url(<?php echo $iurl;?>/db-scroll-bg.gif) no-repeat top; z-index:10000
}
.auto-scroll 
{
overflow:auto;height:11em
}
.root 
{
position:relative;height:260px;margin:0;width:1px
}
.thumb 
{
position:absolute;height:40px;width:16px;margin-top:-28px;z-index:11000
}
.up 
{
margin-top:254px;height:16px
}
.dn 
{
margin-top:0px;padding:0;height:15px
}
.up a,.up a img,.dn a,.dn a img,.thumb a,.thumb a img 
{
border:0
}
.up a:focus,.dn a:focus 
{
 -moz-outline-style:none
}
.up a:active,.dn a:active 
{
outline:none
}
.scrollContainer
{
 position:absolute; left:0; top:19px; clip:rect(0 467 200 0); overflow:auto; border:0
}
.scrollContent 
{
position:absolute;left:0px;top:0px
}
.hor-scroll 
{
width:100%;overflow:auto;padding-bottom:4px;margin-bottom:-4px
}
.note-list
{
width:100%;overflow:hidden
}
.note-list li
{
border-top:1px solid #e3e3e3;margin-top:9px !important;background:url(<?php echo $iurl;?>/icon_note_list.gif) no-repeat 0 3px;padding-bottom:9px;padding-left:18px
}
.wrapper   
{
min-width:980px
}
.header
{
background:url(<?php echo $iurl;?>/header_top_bg.gif) repeat-x #425e66;text-align:right
}
.middle
{
    min-height:450px;    background:url(<?php echo $iurl;?>/simple_container_bg.gif) repeat-x #fff;    padding:23px 27px 0 27px
}
.middle-popup
{
    border-bottom:3px solid #fff;    background:url(<?php echo $iurl;?>/middle_bg.gif) repeat-x 0 100% #fff;    padding:0 0 0 0;    background:yellow
}
.container-collapsed
{
    padding:1.8em 2.2em 1.8em 2em;    padding-top:0
}
.columns
{
background:url(<?php echo $iurl;?>/side_col_bg.gif) repeat-y 217px 0
}
div.side-col
{
 float:left; width:220px; padding-bottom:25px
}
div.main-col
{
 margin-left:220px; min-height:450px; padding:0 0 25px 25px
}
div.main-col-inner
{
float:left; width:100%
}
.footer
{
    clear:both;    background:url(<?php echo $iurl;?>/footer_bg.gif) repeat-x #e6e6e6;    padding:105px 2.8em 2.8em 2.8em;    font-size:.95em;    text-align:center
}
.simple-container-popup
{
    min-height:50px !important;    padding:1.8em 2.3em 6em 2.3em;    background:url(<?php echo $iurl;?>/simple_container_bg.gif) repeat-x
}
body.html-body-popup 
{
min-width:300px !important
}
.logo 
{
float:left;margin:5px 20px 5px 27px;height:43px
}
.header-top 
{
border-bottom:1px solid #5F767F
}
.header-right 
{
padding:10px 25px 0 15px;font-size:.95em;color:#fff
}
.header-right a,.header-right a:hover 
{
color:#fcce77
}
.header-right .separator 
{
color:#999
}
.header-right fieldset 
{
display:inline;padding-left:10px
}
.header-right fieldset input.input-text
{
width:18em
}
.header-right .super
{
 float:right; line-height:1.8em; margin-bottom:14px; margin-left:1.3em
}
div.autocomplete
{
 z-index:10000; position:absolute; width:250px; background-color:white; border:1px solid #888; margin:0px; padding:0px
}
div.autocomplete ul 
{
list-style-type:none;margin:0px;padding:0px
}
div.autocomplete ul li.selected 
{
background-color:#dcebf0
}
div.autocomplete ul li
{
 list-style-type:none; padding:.5em .7em; min-height:32px; cursor:pointer; text-align:left; color:#2f2f2f; line-height:1.3em
}
.footer .bug-report 
{
float:left;width:35%;text-align:left
}
.footer .legality 
{
float:right;width:35%;min-height:19px;padding-left:22px;text-align:right
}
.catalog-categories .side-col 
{
width:25em;padding-right:25px
}
 .catalog-categories .main-col 
{
padding-left:25px;margin-left:25em
}
 .order-summary .side-col 
{
padding-right:25px
}
 .order-summary .main-col 
{
padding-left:25px
}
 .content-header
{
 margin-bottom:18px; border-bottom:4px solid #dfdfdf; padding-bottom:.25em
}
.content-header table 
{
width:100%
}
.content-header h3 
{
float:left;margin:.3em .5em 0 0;color:#eb5e00;font-size:1.25em;line-height:1.2em
}
.content-header .head h3 
{
float:none
}
.content-header .button-set 
{
white-space:nowrap;text-align:right
}
.content-header .content-buttons 
{
white-space:nowrap!important;margin:0
}
.content-header td.content-buttons 
{
width:13%;white-space:nowrap!important;margin:0
}
.content-buttons button,.content-header button,.filter-actions button 
{
margin:0 0 0 5px
}
.side-col .content-header 
{
border-bottom:0;margin-right:12px;margin-bottom:.6em
}
.catalog-categories .side-col .content-header
{
margin-right:0
}
 .left-col-block
{
width:200px
}
 .content-header-floating
{
 position:fixed; left:0; top:0; display:none; border:0; border-bottom:solid 1px #988753;z-index:100; background:#fdfaa4; opacity:.85; -moz-opacity:.85; filter:alpha(opacity=85); width:100%
}
.content-header-floating .content-header
{
padding:6px 8px 4px 8px; margin-bottom:0px; border:0
}
.content-header-floating td 
{
padding-right:20px
}
.content-header-floating button
{
margin-top:3px
}
.content-header-floating .content-buttons
{
float:right
}
.content-buttons
{
margin-bottom:5px;float:right;display:inline;white-space:nowrap
}
.content-header-floating .form-buttons
{
padding-right:20px
}
.content-header-floating h3
{
margin-left:20px;display:inline
}
.box-head 
{
margin-bottom:.6em;text-align:right
}
.box-head h4 
{
float:left;margin-bottom:0
}
 .icon-head                     
{
min-height:18px;background-repeat:no-repeat;background-position:0 0;padding-left:22px
}
.head-customer-address-list    
{
background-image:url(<?php echo $iurl;?>/fam_house.gif)
}
.head-edit-form                
{
background-image:url(<?php echo $iurl;?>/fam_page_white.gif)
}
.head-customer-view            
{
background-image:url(<?php echo $iurl;?>/fam_status_online.gif);padding-left:18px
}
.head-customer,.head-customer-groups          
{
background-image:url(<?php echo $iurl;?>/fam_group.gif)
}
.head-user                     
{
background-image:url(<?php echo $iurl;?>/fam_user.gif)
}
.head-user-edit                
{
background-image:url(<?php echo $iurl;?>/fam_user_edit.gif)
}
.head-user-comment             
{
background-image:url(<?php echo $iurl;?>/fam_user_comment.gif)
}
.head-comment                  
{
background-image:url(<?php echo $iurl;?>/fam_comment.gif)
}
.head-cart                     
{
background-image:url(<?php echo $iurl;?>/fam_cart.gif)
}
.head-account                  
{
background-image:url(<?php echo $iurl;?>/fam_account.gif)
}
.head-online-visitors          
{
background-image:url(<?php echo $iurl;?>/fam_monitor.gif)
}
.head-products                 
{
background-image:url(<?php echo $iurl;?>/fam_package.gif)
}
.head-catalog-product          
{
background-image:url(<?php echo $iurl;?>/fam_package.gif)
}
.head-newsletter-queue         
{
background-image:url(<?php echo $iurl;?>/fam_newspaper_go.gif)
}
.head-newsletter-list          
{
background-image:url(<?php echo $iurl;?>/fam_newspaper.gif)
}
.head-newsletter-report        
{
background-image:url(<?php echo $iurl;?>/fam_newspaper_error.gif)
}
.head-tag,.head-tag-product   
{
background-image:url(<?php echo $iurl;?>/fam_tag_orange.gif)
}
.head-sales-order,.head-sales-invoice            
{
background-image:url(<?php echo $iurl;?>/fam_folder_table.gif)
}
.head-categories               
{
background-image:url(<?php echo $iurl;?>/fam_folder_database.gif);padding-left:20px;color:#253033 !important
}
.head-catalog-product-attribute
{
background-image:url(<?php echo $iurl;?>/fam_rainbow.gif);padding-left:24px
}
.head-product-attribute-sets   
{
background-image:url(<?php echo $iurl;?>/fam_folder_palette.gif);padding-left:23px
}
.head-tax                      
{
background-image:url(<?php echo $iurl;?>/fam_money_add.gif)
}
.head-cms-page,.head-cms-block
{
background-image:url(<?php echo $iurl;?>/application_view_tile.gif)
}
.head-backups-control          
{
background-image:url(<?php echo $iurl;?>/fam_server_database.gif)
}
.head-money,.head-promo-quote 
{
background-image:url(<?php echo $iurl;?>/fam_money.gif)
}
.head-shipping-address,.head-billing-address          
{
background-image:url(<?php echo $iurl;?>/fam_house.gif)
}
.head-shipping-method          
{
background-image:url(<?php echo $iurl;?>/fam_lorry.gif)
}
.head-payment-method           
{
background-image:url(<?php echo $iurl;?>/fam_creditcards.gif)
}
.head-order-date               
{
background-image:url(<?php echo $iurl;?>/fam_calendar.gif)
}
.head-customer-sales-statistics
{
background-image:url(<?php echo $iurl;?>/fam_money.gif)
}
.head-notification             
{
background-image:url(<?php echo $iurl;?>/fam_folder_table.gif)
}
#page-login                            
{
background:#f8f8f8;text-align:center
}
.login-container                       
{
width:581px;padding-left:32px;margin:170px auto;text-align:center
}
.login-box                             
{
position:relative
}
.login-form                            
{
padding:27px 57px 35px 57px;background:url(<?php echo $iurl;?>/login_box_bg.jpg) no-repeat;text-align:left
}
.login-form #messages                  
{
margin:0 8px 0 0
}
.login-form .input-left                
{
float:left;width:50%
}
.login-form .input-right               
{
float:right;width:50%
}
.login-form .input-box input.input-text
{
width:94%
}
.login-form .input-box input.input-text.forgot-password
{
width:100%
}
.login-form h2                         
{
font-size:1.7em;font-weight:normal
}
.login-form label                      
{
font-weight:bold
}
.login-form .form-buttons              
{
margin:12px 0 0 0;clear:both;text-align:right
}
.login-box .bottom 
{
    width:581px;    height:5px;    background:url(<?php echo $iurl;?>/login_box_bottom.jpg) no-repeat;    overflow:hidden
}
.login-container .legal
{
    margin:0;    background:url(<?php echo $iurl;?>/login_box_legal_bg.gif) no-repeat; padding:8px 8px 5px 8px; font-size:.95em
}
.login-form .validation-advice 
{
margin:0 17px 0 0
}
.login-form .forgot-link 
{
margin:0 17px 0 0;text-align:right
}
.dashboard-container 
{
border:1px solid #ccc
}
.dashboard-container .switcher 
{
margin-bottom:0; border:0
}
.overlay span
{
display:block;width:100%;text-align:center;position:absolute;top:50%;margin:-5px 0 0;color:#000
}
.price
{
white-space:nowrap !important
}
.price-incl-tax
{
display:block
}
.price-incl-tax .label
{
display:block;white-space:nowrap
}
.price-incl-tax .price
{
 font-weight:bold
}
.price-excl-tax 
{
display:block
}
.price-excl-tax .label
{
display:block;white-space:nowrap
}
.price-excl-tax .price
{
 font-weight:bold
}
.order-tables td h5.title
{
font-size:1em;font-weight:bold
}
.order-tables td .option-label
{
font-weight:bold;font-style:italic
}
.order-tables td .option-value
{
padding-left:10px
}
.order-tables td .qty-table
{
border:0 !important;width:100%
}
.order-tables td .qty-table td
{
border:0 !important;padding:0 4px !important
}
dl.item-options dt
{
font-weight:bold;font-style:italic
}
dl.item-options dd
{
padding-left:10px
}
ul.item-options
{
list-style:none
}
ul.item-options li
{
padding-left:.7em
}
.page-create-order .side-col 
{
width:260px;background:none;padding:0
}
.page-create-order .main-col 
{
padding-left:28px
}
.page-create-order .switcher 
{
margin-bottom:25px
}
.create-order-sidebar-container 
{
border:1px solid #d6d6d6;background:#fafafa
}
.create-order-sidebar-block .content 
{
margin:0 !important;padding:4px 6px
}
.create-order-sidebar-block .head 
{
border-top:1px solid #ddd;background:#ececec;padding:2px 6px 1px;font-size:.9em;text-align:right
}
.create-order-sidebar-block .head h5 
{
float:left;margin:0;color:#2c464f;text-align:left
}
.create-order-sidebar-block .content table td,.create-order-sidebar-block table th 
{
padding:0 3px 0 0
}
.create-order-sidebar-block select 
{
width:170px
}
.create-order-sidebar-block ul 
{
margin-left:20px
}
.order-choose-address 
{
margin:0px 0px 10px 0px;padding:8px 15px;background:#e7efef
}
.order-save-in-address-book 
{
margin:0px 0px 0px 0px;padding:8px 15px;background:#e7efef
}
.entry-edit .content .form-list 
{
width:100%
}
.entry-edit .order-address td.label label
{
width:100px
}
.entry-edit .order-address .input-text,.entry-edit .order-address .textarea 
{
width:95%
}
.entry-edit .order-address .select 
{
width:97.5%
}
.order-search-items .entry-edit .grid 
{
height:610px;overflow:auto
}
.order-search-items .entry-edit .grid table
{
width:99.9%
}
.account-info .form-list td.value 
{
width:auto
}
.order-totals 
{
margin-left:auto;border:1px solid #d7c699 !important;padding:12px 0;background:#fcfac9;text-align:right
}
.order-totals table 
{
border:none;background:none;margin-left:auto
}
.order-totals table td 
{
padding:3px 20px 3px 10px;white-space:nowrap
}
.order-totals table td.label 
{
white-space:normal;padding:3px 10px 3px 20px
}
.order-totals table td.last 
{
padding:2px 6px
}
.order-totals-bottom 
{
padding:0 20px
}
.grand-total,.grand_total 
{
font-size:1.2em;font-weight:bold;color:#eb4d00 !important
}
.tax-total
{
cursor:pointer
}
.tax-total td
{
padding-top:5px !important;padding-bottom:5px !important
}
.tax-total .tax-collapse
{
float:right;padding-left:20px;background:url(<?php echo $iurl;?>/bg_collapse.gif) 0 5px no-repeat;text-align:right;cursor:pointer
}
.show-details .tax-collapse
{
background-position:0 -52px
}
.show-details td
{
border-top:1px solid #eae1b2
}
.tax-details td
{
font-size:11px;background-color:#fdfcdf
}
.tax-details-first td
{
border-top:1px solid #eae1b2
}
.payment-methods dt 
{
margin-bottom:3px
}
.payment-methods dd 
{
outline-color:none !important;margin-left:20px
}
.payment-methods .validation-advice 
{
margin-left:2px
}
 .giftmessage-order-create .entire-order,.giftmessage-order-create .each-order-item         
{
padding:1.2em 1.5em;padding-right:0;padding-left:1.2em
}
.giftmessage-order-create .each-order-item         
{
height:275px
}
.giftmessage-order-create .each-order-item .scroll 
{
overflow:auto;height:250px
}
.giftmessage-order-create .single                  
{
width:100%;float:left;padding:1.2em 1.5em
}
.giftmessage-order-create .section-head            
{
margin-bottom:10px
}
.giftmessage-order-create .item-head               
{
background-color:#cfcfcf;margin-bottom:10px;width:400px;padding:2px 6px;font-size:11px
}
.giftmessage-order-create .entire-order            
{
background-color:#eee;height:275px
}
.giftmessage-order-create fieldset                 
{
padding:0 0 0 0
}
.giftmessage-order-create .entry-edit .input-text,.giftmessage-order-create .entry-edit .textarea    
{
width:220px
}
.giftmessage-single-item                           
{
padding:0 !important
}
.giftmessage-single-item .item-container           
{
cursor:auto
}
.giftmessage-single-item .item-text                
{
padding:2px 4px
}
.giftmessage-single-item .gift-form                
{
margin-top:3px;background:#f7f6f4 url(<?php echo $iurl;?>/gift-message-grid-column-bg.gif) 0 0 repeat-x;zoom:1
}
.giftmessage-single-item .gift-form .entry-edit fieldset
{
border:none !important;margin-bottom:0;background:none !important;padding:15px
}
.giftmessage-single-item .gift-form .entry-edit fieldset .last
{
margin-bottom:0
}
.giftmessage-single-item .gift-form .entry-edit input.input-text
{
width:75% !important
}
.giftmessage-single-item .gift-form .entry-edit textarea
{
width:96% !important
}
.giftmessage-single-item .action-link-holder       
{

}
.giftmessage-single-item .action-link
{
padding-right:10px;background:url(<?php echo $iurl;?>/gift-message-expand.gif) 100% 50% no-repeat;cursor:pointer
}
.giftmessage-single-item .open
{
background:url(<?php echo $iurl;?>/gift-message-collapse.gif) 100% 50% no-repeat
}
.giftmessage-whole-order-container .entry-edit input.input-text
{
width:280px !important
}
.giftmessage-whole-order-container .entry-edit textarea
{
width:99% !important;padding:2px 3px
}
.giftmessage-whole-order-container .entry-edit label
{
width:121px
}
.no-active-category a span                 
{
color:#aaa !important
}
#tree-div
{
overflow:auto!important;padding-bottom:15px;width:200px
}
.x-tree-node .leaf .x-tree-node-icon       
{
background-image:url(<?php echo $iurl;?>/fam_leaf.png)
}
.x-tree-node .system-leaf .x-tree-node-icon
{
background-image:url(<?php echo $iurl;?>/fam_application_form_delete.png)
}
#category_info_tabs_general_content .checkbox
{
float:left;margin:3px 3px 0 25px
}
.webiste-groups 
{
padding:10px 20px
}
.group-stores 
{
padding:2px 10px
}
.bundle-option-row table tbody td 
{
white-space:nowrap
}
.bundle-option-row table tbody td label
{
float:left
}
.bundle-option-row input.option-label 
{
width:50% !important
}
.bundle-option-row input.option-position
{
width:70px !important
}
.catalog-categories .side-col 
{
width:240px
}
.tier-price-input 
{
margin-bottom:8px
}
.tier-price-input input.price 
{
width:80px;margin-right:10px
}
.tier-price-input input.qty 
{
width:80px
}
.tier-price-input .tier-container 
{
position:relative;clear:both
}
.tier-price-input .tier-container div 
{
float:left
}
.tier-price-input .tier-container label
{
width:30px;margin:0;padding:0
}
.tier-price-input .validation-advice 
{
margin:0;height:25px
}
.tier-price-input .custgroup-div select
{
width:auto;padding:0
}
.tier-price-input .qty-div 
{
padding-left:20px
}
.tier-price-input .price-div 
{
padding-left:20px
}
.tier-price-input .price-div .validation-advice
{
margin:0
}
.btn-remove-tier-group 
{
float:right;right:24px;top:5px
}
.image-preview 
{
position:absolute;cursor:pointer
}
.edit-attribute-set .form-list td.label
{
width:105px
}
.edit-attribute-set .form-list td.label label
{
width:105px
}
.edit-attribute-set .entry-edit fieldset input.input-text
{
width:200px
}
.ratings                       
{
margin:0px 0
}
.rating-box
{
    float:left;    position:relative;    width:69px;    height:16px;    margin:0 5px 3px 0;    background:url(<?php echo $iurl;?>/product_rating_blank_star.gif) repeat-x
}
.rating-box .rating
{
    position:absolute;    top:0;    left:0;    height:16px;    background:url(<?php echo $iurl;?>/product_rating_full_star.gif) repeat-x
}
.field-row .ratings 
{
width:120px;float:left;clear:right
}
.field-row .ratings-container 
{
width:250px;float:left
}
.product-review-box 
{
width:auto;margin:8px 0 13px 0
}
.product-review-box td,.product-review-box th 
{
text-align:center
}
.product-review-box td.label 
{
width:100px;text-align:left
}
.rule-tree ul                  
{
padding-left:16px !important;border-left:dotted 1px #888
}
.rule-tree .x-tree ul          
{
padding-left:0 !important;border-left:none !important
}
.rule-param .label             
{
font-weight:bold;color:black
}
.rule-param .label:hover       
{
font-weight:bold;color:blue
}
.rule-param .element           
{
display:none
}
.rule-param input,.rule-param select             
{
width:auto !important
}
.rule-param-edit .label        
{
display:none
}
.rule-param-edit .element      
{
display:inline
}
.rule-param-add                
{
font-weight:normal;color:green;text-decoration:none
}
.rule-param-add:hover          
{
font-weight:normal;color:blue;text-decoration:none
}
.rule-param-apply              
{
font-weight:normal;color:green;text-decoration:none
}
.rule-param-apply:hover        
{
font-weight:normal;color:blue;text-decoration:none
}
.rule-param-remove             
{
font-weight:normal;color:red;text-decoration:none
}
.rule-param-remove:hover       
{
font-weight:normal;color:blue;text-decoration:none
}
.rule-chooser                  
{
border:solid 1px #CCC;margin:5px;padding:5px;display:none
}
.rule-param-wait               
{
padding-left:20px;background-image:url(<?php echo $iurl;?>/rule-ajax-loader.gif);background-repeat:no-repeat;background-position:0 50%
}
fieldset.sitemap .form-list
{
width:auto
}
.custom-options .box
{
padding:0 1.5em
}
.custom-options .option-box
{
border:1px solid #cddddd;padding:1em; background:#e7efef;margin:1.5em 0
}
.custom-options .option-header
{
border:0;width:100%;background:#e7efef;border-bottom:1em solid #e7efef
}
.custom-options .option-header .input-text,.custom-options .option-header .select
{
width:95%
}
.custom-options .option-header th
{
padding:2px
}
.custom-options .option-header td
{
padding:5px 2px
}
.custom-options .opt-title
{
width:175px
}
.custom-options .opt-type
{
width:150px
}
.custom-options .opt-req
{
width:80px
}
.custom-options .opt-order
{
width:60px
}
.custom-options .option-box .border
{
width:615px
}
.custom-options th
{
white-space:nowrap
}
.custom-options .type-title 
{
width:auto
}
.custom-options .type-price 
{
width:60px
}
.custom-options .type-type 
{
width:80px
}
.custom-options .type-uqty 
{
width:100px
}
.custom-options .type-sku 
{
width:150px
}
.custom-options .type-order 
{
width:60px
}
.custom-options .type-butt 
{
width:33px
}
.custom-options .type-last 
{
width:auto
}
.custom-options .option-box .border .input-text,.custom-options .option-box .border .select
{
width:95%!important
}
.custom-options .option-box .border .type-last .input-text
{
width:60px!important
}
.custom-options .option-box .border input.type-sku 
{
width:150px !important
}
.bundle .option-box 
{
padding-bottom:2em
}
.bundle .option-box .border
{
width:100%;border-bottom:0
}
.bundle .option-box .border td
{
border-bottom:1px solid #dce5e6!important
}
.bundle .option-title
{
padding:0 0 10px;border-bottom:1px solid #cddddd
}
.bundle .option-title button
{
float:right
}
.bundle .option-title label
{
font-weight:bold;line-height:21px;padding-right:1em;float:left
}
.bundle .option-title .input-text
{
float:left;width:260px;vertical-align:middle
}
.bundle .option-header
{
clear:both;margin-top:5px
}
.bundle .border .last
{
width:33px
}
.address-list                          
{
width:28em;padding-right:22px
}
.address-list .btn-edit-address,.address-list .btn-remove-address      
{
position:absolute;top:8px
}
.address-list .btn-edit-address        
{
right:8px
}
.address-list .btn-remove-address      
{
right:27px
}
.address-list li                       
{
position:relative;list-style:none;padding:12px 14px;cursor:pointer;border-top:1px solid #e6e6e6;background:url(<?php echo $iurl;?>/address_list_li.gif) repeat
}
.address-list li.on 
{
background:#e7efef
}
.address-list li.over 
{
background-color:#fcf5dd
}
.address-list li table 
{
width:100%
}
.delete-address 
{
float:right;margin:0 0 10px 10px
}
.address-type .address-type-line 
{
display:block;margin:2px 0
}
.address-type .address-type-line input 
{
margin-right:3px
}
.template-preview 
{
width:100%;height:200px;background-color:#FFF
}
.cms-edit-form .form-list
{
width:100%
}
.cms-edit-form .form-list td.value
{
width:auto
}
fieldset.config td         
{
padding-top:5px;padding-bottom:5px
}
fieldset.config input.input-text
{
width:250px
}
fieldset.config select.select
{
width:256px
}
div.tree_item,div.tree_item_last         
{
background-position:left;background-repeat:no-repeat;padding-left:20px
}
div.tree_item              
{
background-image:url(<?php echo $iurl;?>/tree_icons/join.gif)
}
div.tree_item_last         
{
background-image:url(<?php echo $iurl;?>/tree_icons/joinbottom.gif)
}
div.tree_line              
{
position:absolute;left:0;background-image:url(<?php echo $iurl;?>/tree_icons/line.gif)
}
img.attribute-global       
{
width:16px;height:16px;vertical-align:middle
}
ul.config-tabs             
{
border-top:none
}
ul.config-tabs dt
{
    border-top:1px solid #849ba3;    background:#d1dedf url(<?php echo $iurl;?>/config_tab_dt_bg.gif) no-repeat 0 50%; padding:2px 0 2px 1.5em; font-weight:bold; text-transform:uppercase; color:#306375
}
ul.config-tabs dl 
{
margin-bottom:16px
}
ul.config-tabs a.last span 
{
background-image:none
}
.inline-table
{
border:0 !important
}
.inline-table td
{
border:0 !important;padding:0 5px 5px !important
}
#profile-generator select
{
width:207px
}
#profile-generator input.input-text
{
width:200px
}
.field-row .with-tip
{
display:block;margin-left:150px
}
.field-row .with-tip input
{
float:none
}
.field-row .with-tip small
{
display:block;padding-top:2px
}
#profile-generator .field-row button.delete
{
vertical-align:middle
}
#profile-generator fieldset button.add
{
display:inline;margin:0
}
.attribute-change-checkbox
{
white-space:nowrap;clear:none;margin-left:5px
}
.attribute-change-checkbox label
{
margin-left:5px;float:none !important;display:normal
}
.order-history
{
width:70%;margin-right:27px
}
ul.super-product-attributes
{
padding-left:15px
}
.uploader .file-row
{
    width:600px;    padding:0.5em 0.6em;    margin:0.5em 0.6em;    border:1px solid #ccc;    background-color:#f9f9f9;    vertical-align:middle
}
.uploader .file-row .file-info
{
    float:left
}
.uploader .file-row .progress-text
{
    float:right;    font-weight:bold
}
.uploader .file-row .delete-button
{
    float:right
}
.uploader .buttons
{
    float:left
}
.uploader .flex
{
    float:right
}
.uploader .progress
{
    border:1px solid #f0e6b7;    background-color:#feffcc
}
.uploader .error
{
    border:1px solid #aa1717;    background-color:#ffe6de
}
.uploader .error .progress-text
{
    padding-right:10px
}
.uploader .complete
{
    border:1px solid #90c898;    background-color:#e5ffed
}
.grid tr.read
{
background:#fff !important
}
.grid tr.unread
{
background:#fcf6f5 !important
}
.grid-row-title
{
color:#444;font-weight:bold
}
.grid-severity-critical,.grid-severity-major,.grid-severity-minor,.grid-severity-notice  
{
display:block;color:#fff;font-family:Arial,Tahoma,Verdana;font-weight:bold;font-size:10px;text-transform:uppercase;text-align:center;height:13px;padding-top:3px;width:61px;margin:1px 0;line-height:1
}
.grid-severity-critical
{
background:url(<?php echo $iurl;?>/bg_severity-critical.gif) no-repeat 0 0
}
.grid-severity-major   
{
background:url(<?php echo $iurl;?>/bg_severity-major.gif) no-repeat 0 0
}
.grid-severity-minor   
{
background:url(<?php echo $iurl;?>/bg_severity-minor.gif) no-repeat 0 0
}
.grid-severity-notice  
{
background:url(<?php echo $iurl;?>/bg_severity-notice.gif) no-repeat 0 0
}
.super-attributes                      
{
list-style-type:none;margin:0;padding:0
}
.super-attributes li.attribute         
{
border:1px solid #dfdfdf;background-color:#ededed;margin:1px 0
}
.super-attributes li.attribute ul.attribute-values
{
list-style-type:none;margin:0;padding:0
}
.super-attributes li.attribute div.values-container
{
width:80%;margin-top:2px;margin-bottom:2px
}
.super-attributes li.attribute-value 
{
display:block;margin:1px 0
}
.super-attributes li.attribute-value .validation-advice
{
margin:0;white-space:wrap
}
.super-attributes li.attribute-value .attribute-value-label-container
{
width:200px
}
.super-attributes div.attribute-name-container,.super-attributes li.attribute div.values-container,.configurable-simple-product div.values-container,.super-attributes li.attribute-value .attribute-values-container,.configurable-simple-product  .attribute-values-container,.super-attributes li.attribute-value .attribute-values-container-main,.configurable-simple-product  .attribute-values-container-main,.super-attributes li.attribute-value .attribute-value-label-container
{
 display:block
}
.super-attributes li.attribute-value .attribute-price,.configurable-simple-product .attribute-price
{
width:70px !important
}
.super-attributes li.attribute-value .attribute-price-type,.configurable-simple-product .attribute-price-type
{
 width:70px !important
}
.super-attributes  div.attribute-name-container
{
    cursor:move;    background-image:url(<?php echo $iurl;?>/arrow_sort_move.gif); background-repeat:no-repeat; background-position:4px 50%; font-weight:bold; padding-left:15px; margin-top:2px; margin-bottom:2px
}
.preview .cell-image .place-holder
{
 border:1px solid #AEAEAE; width:100px; height:100px; text-align:center
}
.preview .cell-image .place-holder span
{
margin-top:30px;display:block
}
.preview .cell-position .input-text 
{
width:90% !important
}
.tier .data 
{
width:480px
}
.tier .data select 
{
width:99%
}
.tier .data input.qty 
{
width:20px !important
}
.tier .data .last
{
width:33px
}
.link-feed
{
background:url(<?php echo $iurl;?>/icon_feed.gif) no-repeat left 2px;padding-left:18px
}
#page-help-link
{
    line-height:26px;    padding-left:20px;    color:#ebebff;    background:url(<?php echo $iurl;?>/fam_help.gif) no-repeat 0 50%
}
#page-help-link:link,#page-help-link:visited
{
text-decoration:none
}
#page-help-link:hover
{
color:white
}
.f-left,.left 
{
float:left
}
.f-right,.right 
{
float:right
}
.v-top 
{
vertical-align:top
}
.v-middle 
{
vertical-align:middle
}
.v-bottom 
{
vertical-align:bottom
}
.a-left 
{
text-align:left
}
.a-center 
{
text-align:center
}
.a-right 
{
text-align:right
}
.nm 
{
margin:0 !important
}
.np 
{
padding:0 !important
}
.no-display 
{
display:none
}
.no-show 
{
display:none
}
.nowrap,.nobr 
{
white-space:nowrap
}
.no-float 
{
float:none !important
}
.pointer 
{
cursor:pointer
}
.emph,.accent 
{
color:#eb5e00 !important
}
.subdue 
{
color:#306375
}
.normal 
{
font-weight:normal !important
}
.bold 
{
font-weight:bold !important
}
 .bundle .option-title:after,.columns:after,.main-col:after,.content-header-floating:after,.entry-edit .entry-edit-head:after,.content-header:after,.login-box .button-set:after,ul.tabs-horiz:after,.header-top:after,dl.accordion dt:after,.entry-edit fieldset li:after,.entry-edit fieldset span:after,.content:after,#topnav:after,.main:after,.container:after,.footer:after,.middle:after,.header:after,.box-head:after,div.actions:after,.tier-container:after,.clear:after,.notification-global:after
{
display:block;clear:both;content:".";font-size:0;line-height:0;height:0;visibility:hidden;overflow:hidden
}
