<?php
/** Business Valuation planning admin page — ksf_fa_business_valuation. @package Ksfraser\FA\BusinessValuation */
namespace Ksfraser\FA\BusinessValuation;
function business_valuation_planning_page(): void {
    $debtor_no = (int) ($_REQUEST['debtor_no'] ?? 0);
    echo '<h2>Business Valuation Planning</h2><p>', htmlentities(render_page($debtor_no)), '</p>';
}
