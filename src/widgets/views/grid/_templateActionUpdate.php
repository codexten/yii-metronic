<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 5/11/18
 * Time: 4:01 PM
 */
?>
<template slot="action-update" slot-scope="{model}">
    <a :href="model._meta.updateUrl"
       v-if="model._meta.canUpdate"
       title="update"
       class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill">
        <i class="la la-edit"></i>
    </a>
</template>
