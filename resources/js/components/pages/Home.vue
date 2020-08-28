<template>
    <div>
        <div class="content-wrapper">
            <div class="content">
                <div class="breadcrumb-wrapper">
                    <h1>Alerts</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <span class="mdi mdi-home"></span>
                                </a>
                            </li>
                            <li class="breadcrumb-item">components</li>
                            <li class="breadcrumb-item" aria-current="page">
                                alert
                            </li>
                        </ol>
                    </nav>
                </div>

                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Default Alerts</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p class="mb-5">
                                    Alerts provide contextual feedback messages
                                    for typical user actions with the handful of
                                    available and flexible alert messages. Read
                                    bootstrap documentaion for
                                    <a
                                        href="https://getbootstrap.com/docs/4.4/components/alerts/"
                                        target="_blank"
                                        >more details.</a
                                    >
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <label for="primary">primary alerts</label>
                                <div class="alert alert-primary" role="alert">
                                    This is a primary alert—check it out!
                                </div>

                                <label for="secondary">secondary alerts</label>
                                <div class="alert alert-secondary" role="alert">
                                    This is a secondary alert—check it out!
                                </div>

                                <label for="success">success alerts</label>
                                <div class="alert alert-success" role="alert">
                                    This is a success alert—check it out!
                                </div>

                                <label for="danger">danger alerts</label>
                                <div class="alert alert-danger" role="alert">
                                    A simple danger alert—check it out!
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="warning">warning alerts</label>
                                <div class="alert alert-warning" role="alert">
                                    This is a warning alert—check it out!
                                </div>

                                <label for="info">info alerts</label>
                                <div class="alert alert-info" role="alert">
                                    This is a info alert—check it out!
                                </div>

                                <label for="light">light alerts</label>
                                <div class="alert alert-light" role="alert">
                                    This is a light alert—check it out!
                                </div>
                                <label for="dark">dark alerts</label>
                                <div class="alert alert-dark" role="alert">
                                    This is a dark alert—check it out!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Icon Alerts</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p class="mb-5">
                                    For icon alert add
                                    <code>
                                        &lt;i class="mdi mdi-alert
                                        mr-1"&gt;&lt;/i&gt;
                                    </code>
                                    inside
                                    <code>
                                        &lt; div class="alert" role="alert"&gt; </code
                                    >. Get classes for material icon
                                    <a href="material-icon.html">here</a>.
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <label for="primary">primary alerts</label>
                                <div class="alert alert-primary" role="alert">
                                    <i class="mdi mdi-alert mr-1"></i>
                                    This is a primary alert—check it out!
                                </div>
                                <label for="secondary">secondary alerts</label>
                                <div class="alert alert-secondary" role="alert">
                                    <i class="mdi mdi-alert mr-1"></i>
                                    This is a secondary alert—check it out!
                                </div>
                                <label for="success">success alerts</label>
                                <div class="alert alert-success" role="alert">
                                    <i class="mdi mdi-alert mr-1"></i>
                                    This is a success alert—check it out!
                                </div>
                                <label for="danger">danger alerts</label>
                                <div class="alert alert-danger" role="alert">
                                    <i class="mdi mdi-alert mr-1"></i>
                                    This is a danger alert—check it out!
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="warning">warning alerts</label>
                                <div class="alert alert-warning" role="alert">
                                    <i class="mdi mdi-alert mr-1"></i>
                                    This is a warning alert—check it out!
                                </div>
                                <label for="info">info alerts</label>
                                <div class="alert alert-info" role="alert">
                                    <i class="mdi mdi-alert mr-1"></i>
                                    This is a info alert—check it out!
                                </div>
                                <label for="light">light alerts</label>
                                <div class="alert alert-light" role="alert">
                                    <i class="mdi mdi-alert mr-1"></i>
                                    This is a light alert—check it out!
                                </div>
                                <label for="dark">dark alerts</label>
                                <div class="alert alert-dark" role="alert">
                                    <i class="mdi mdi-alert mr-1"></i>
                                    This is a dark alert—check it out!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
