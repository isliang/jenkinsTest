pipeline {
    agent { docker 'php' }
    stages {
        stage('build') {
            steps {
                sh 'git --version'
            }
        }
        stage('test') {
            steps {
                sh 'phpunit'
            }
        }
    }
}
