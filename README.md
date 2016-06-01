# chain-of-responsibility-sample
This is a tutorial project for implementing the Chain of Responsibility design pattern in PHP

## UML ##

![UML](https://raw.githubusercontent.com/rakista112/chain-of-responsibility-sample/master/images/Chain%20of%20Responsibility%20Pattern.png)

All the Calculations extend AbstractCalculation which implements the calculate method. This method
does the following:

- uses the Calculation's doCalculate class 
- if there is a next calculation in the pipeline, passes it to the next Calculation,
- else, it returns the result and ends the pipeline.

Here is a visual overview of the whole process.

![visual overview](https://raw.githubusercontent.com/rakista112/chain-of-responsibility-sample/master/images/Pipeline.png)
