pipeline {
    agent { docker 'php' }
    stages {
        stage('build') {
            steps {
                sh 'php --version'
            }
        }
        stage('test') {
            steps {
                sh './vendor/bin/phpunit '
            }
        }
    }
}
