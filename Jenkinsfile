pipeline {
    agent {
        docker {
            image 'php:8.2-cli'
        }
    }

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/fairulmuhammad/php-app.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'apt-get update && apt-get install -y unzip git curl'
                sh 'curl -sS https://getcomposer.org/installer | php'
                sh 'php composer.phar install'
            }
        }

        stage('Run Unit Tests') {
            steps {
                sh './vendor/bin/phpunit tests'
            }
        }

        stage('Docker Build & Deploy') {
            steps {
                sh 'docker build -t php-app .'
                sh 'docker run -d -p 8081:80 php-app'
            }
        }
    }
}
