pipeline {
    agent { docker 'php' }
    stages {
        stage('build') {
            steps {
                sh 'ls -l'
            }
        }
        stage('test') {
            steps {
                sh 'phpunit'
            }
        }
    }
}
