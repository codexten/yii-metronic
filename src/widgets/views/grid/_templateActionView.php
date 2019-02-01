<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 5/11/18
 * Time: 4:01 PM
 */
?>
<template slot="action-view" slot-scope="{model}">
    <a :href="model._meta.viewUrl"
       v-if="model._meta.canView"
       title="view"
       class="m-portlet__nav-link btn m-btn m-btn--hover-success m-btn--icon m-btn--icon-only m-btn--pill">
        <i class="la la-eye"></i>
    </a>
</template>
