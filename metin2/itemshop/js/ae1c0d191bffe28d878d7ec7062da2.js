function showPurchases(a){var b=$("#show-purchase-button-"+a);if($("#table-content-"+a).is(":hidden")){b.attr("class","show-purchase-button-open");$("#table-content-"+a).slideDown("slow")}else{b.attr("class","show-purchase-button-close");$("#table-content-"+a).slideUp("slow")}};