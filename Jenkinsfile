pipeline {
    agent any
    stages {
        stage('build') {
            steps {
                sh 'composer update'
            }
        }
        stage('test') {
            steps {
                sh './vendor/bin/phpunit'
            }
        }
    }
}
